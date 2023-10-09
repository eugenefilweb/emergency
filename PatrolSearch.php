<?php

namespace app\models\search;

use Yii;
use yii\data\ActiveDataProvider;
use app\models\Patrol;
use app\helpers\App;

/**
 * PatrolSearch represents the model behind the search form of `app\models\Patrol`.
 */
// class PatrolSearch extends Patrol
class PatrolSearch extends Patrol
{
    public $keywords;
    public $date_range;
    public $pagination;

    public $searchTemplate = 'patrol/_search';
    public $searchAction = ['patrol/index'];
    public $searchLabel = 'Patrol';

    public $searchKeywordUrl = ['patrol/find-by-keywords'];

    public $map_zoom_level = 13;
    public $show_user_photo = 0;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'created_by', 'updated_by'], 'integer'],
            [['watershed', 'coordinates', 'date', 'notes', 'distance', 'created_at', 'updated_at'], 'safe'],
            [['keywords', 'pagination', 'date_range', 'record_status', 'map_zoom_level', 'user_id', 'status', 'show_user_photo'], 'safe'],
            [['keywords'], 'trim'],
        ];
    }

    public function init()
    {
        $this->pagination = App::setting('system')->pagination;
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return \yii\base\Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        // $query = Patrol::find()
        //     ->alias('p')
        //     ->joinWith('user u');

        $query = Patrol::find()
        ->alias('p')
        ->select(["u.fpo_cluster", "count(u.id) as total_count", "p.barangay", "sum(p.distance) as total_distance"])
        ->leftJoin('user u', 'u.id = p.user_id') // assuming 'user_id' is the foreign key in 'patrol' table that references 'id' in 'user' table
        ->where("p.barangay is not null and p.barangay<>'' and u.fpo_cluster is not null")
        ->groupBy(["u.fpo_cluster", "p.barangay"])
        ->orderBy(['fpo_cluster' => SORT_ASC])
        ->asArray();


        // add conditions that should always apply here
        $this->load($params);

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            //'sort' => ['defaultOrder' => ['p.created_at' => SORT_DESC]],
            'pagination' => [
                'pageSize' => $this->pagination
            ]
        ]);

        $dataProvider->sort->attributes['username'] = [
            'asc' => ['u.username' => SORT_ASC],
            'desc' => ['u.username' => SORT_DESC],
        ];

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'p.id' => $this->id,
            'p.user_id' => $this->user_id,
            'p.watershed' => $this->watershed,
            'p.record_status' => $this->record_status,
            'p.created_by' => $this->created_by,
            'p.updated_by' => $this->updated_by,
            'p.created_at' => $this->created_at,
            'p.updated_at' => $this->updated_at,
            'p.status' => $this->status,
        ]);
                
       if($this->keywords)  {   
          $this->keywords=trim($this->keywords); 
         $query->andFilterWhere(['or', 
            ['like', 'u.username', $this->keywords],  
            ['like', 'u.user_full_name', $this->keywords], 
            ['like', 'p.user_id', $this->keywords],  
            ['like', 'p.watershed', $this->keywords],  
            ['like', 'p.coordinates', $this->keywords],  
            ['like', 'p.date', $this->keywords],  
            ['like', 'p.notes', $this->keywords],  
            ['like', 'p.distance', $this->keywords],  
        ]);
        
       }
        
        if($this->date_range){
          $query->andFilterWhere([
                "between", 
                "date(p.date)", 
                App::formatter()->asDaterangeToSingle($this->date_range, 'start'), 
                App::formatter()->asDaterangeToSingle($this->date_range, 'end'), 
            ]);
         }


        //$query->daterange($this->date_range);
        
        if(!isset($_GET['sort'])){
            $query->orderBy(['p.created_at'=>SORT_DESC]);
        }

        return $dataProvider;
    }

    public function getAdvancedFilterAttributes()
    {
        return [
            'watershed',
        ];
    }

    public function totalFilterTag($attribute)
    {
        if ($this->{$attribute} && is_countable($this->{$attribute})) {
            return implode('', [
                '(',
                App::formatter('asNumber', count($this->{$attribute})),
                ')'
            ]);
        }
    }
}