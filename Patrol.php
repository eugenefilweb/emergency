<?php

namespace app\models;

use Yii;
use app\helpers\App;
use app\helpers\ArrayHelper;
use app\helpers\Html;
use app\models\search\PatrolSearch;
use app\widgets\Anchor;

/**
 * This is the model class for table "{{%patrols}}".
 *
 * @property int $id
 * @property int $user_id
 * @property string|null $watershed
 * @property string|null $coordinates
 * @property string|null $date
 * @property string|null $notes
 * @property string|null $distance
 * @property int $record_status
 * @property int $created_by
 * @property int $updated_by
 * @property string $created_at
 * @property string $updated_at
 */
class Patrol extends ActiveRecord
{
    const FOR_VALIDATION = 0;
    const VALIDATED = 1;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%patrols}}';
    }

    public function config()
    {
        return [
            'controllerID' => 'patrol',
            'mainAttribute' => 'tripId',
            'paramName' => 'id',
        ];
    }

    public function getTripId()
    {
        return App::formatter()->AsStrPad($this->id, 6);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return $this->setRules([
            [['user_id', 'date'], 'required'],
            [['user_id', 'status', 'total_time'], 'integer'],
            [['distance'], 'number'],
            [['distance', 'total_time'], 'default', 'value' => 0],

            [['coordinates', ], 'safe'],
            [['notes'], 'string'],
            [['watershed', 'date'], 'string', 'max' => 255],
            ['user_id', 'exist', 'targetRelation' => 'user'],
            ['status', 'in', 'range' => [
                self::FOR_VALIDATION,
                self::VALIDATED,
            ]]
        ]);
    }

    public function afterSave ($insert, $changedAttributes)
    {
        parent::afterSave($insert, $changedAttributes);

        if ($insert) {
            Notification::patrol($this);
        }
    } 

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return $this->setAttributeLabels([
            'id' => 'ID',
            'user_id' => 'User',
            'watershed' => 'Watershed',
            'coordinates' => 'Coordinates',
            'date' => 'Date',
            'notes' => 'Notes',
            'distance' => 'Distance',
        ]);
    }

    public function getUser()
    {
        return $this->hasOne(User::class, ['id' => 'user_id']);
    }

    public function getUserPhoto()
    {
        return App::if($this->user, fn ($user) => $user->photo);
    }

    public function getTrees()
    {
        return $this->hasMany(Tree::class, ['patrol_id' => 'id']);
    }

    public function getTotalTrees()
    {
        return Tree::find()
            ->where(['patrol_id' => $this->id])
            ->count();
    }

    public function getUsername()
    {
        return App::if($this->user, fn ($user) => $user->username);
    }

    public function getPatrollerName()
    {
        return App::if($this->user, fn ($user) => $user->username);
    }

    public function getUserFullname()
    {
        return App::if($this->user, fn ($user) => $user->fullname);
    }

    /**
     * {@inheritdoc}
     * @return \app\models\query\PatrolQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \app\models\query\PatrolQuery(get_called_class());
    }

    public function gridColumns()
    {
        return [
            'id' => [
                'attribute' => 'id', 
                'label' => 'Trip #',
                'format' => 'raw',
                'value' => function($model) {
                    return Anchor::widget([
                        'title' => $model->tripId,
                        'link' => $model->viewUrl,
                        'text' => true
                    ]);
                }
            ],
            'username' => [
                'label' => 'Patroller',
                'attribute' => 'username', 
                'format' => 'raw'
            ],
            'watershed' => ['attribute' => 'watershed', 'format' => 'raw'],
            // 'coordinates' => ['attribute' => 'coordinates', 'format' => 'encode'],
            'date' => ['attribute' => 'date', 'format' => 'raw'],
            // 'notes' => ['attribute' => 'notes', 'format' => 'raw'],
            'distance' => ['attribute' => 'distance', 'format' => 'distance'],
            'status' => [
                'label' => 'Status',
                'attribute' => 'id', 
                'value' => 'statusBadge',
                'format' => 'raw'
            ],
        ];
    }

    public function detailColumns()
    {
        return [
            'user_id:raw',
            'watershed:raw',
            'coordinates:jsonEditor',
            'date:raw',
            // 'notes:raw',
            'distance:distance',
        ];
    }

    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['JsonBehavior']['fields'] = [
            'coordinates', 
        ];

        return $behaviors;
    }

    public function computeTotalDistance()
    {
        $distance = 0;
        if ($this->coordinates) {
            $coordinates = is_array($this->coordinates) ? $this->coordinates: json_decode($this->coordinates, true);
            $lat2 = 0;
            $lng2 = 0;
            foreach ($coordinates as $coordinate) {
                if (isset($coordinate['lon']) && isset($coordinate['lat'])) {
                    // $data['lat'] = $coordinate['lon'];
                    // $data['lon'] = $coordinate['lat'];
                    
                    // $point = App::formatter()->asEPSG4326($data);

                    $distance += $this->computeDistance(
                        $coordinate['lat'], 
                        $coordinate['lon'],
                        $lat2,
                        $lng2,
                    );

                    $lat2 = $coordinate['lat'];
                    $lng2 = $coordinate['lon'];
                }
            }
        }

        return $distance;
    }

    public function computeDistance($lat1, $lng1, $lat2=0, $lng2=0, $earthRadius = 6378137)
    {
        // $earthRadius = 6371000; // in meters
        $latDelta = deg2rad($lat2 - $lat1);
        $lngDelta = deg2rad($lng2 - $lng1);
        $a = sin($latDelta/2) * sin($latDelta/2) +
           cos(deg2rad($lat1)) * cos(deg2rad($lat2)) *
           sin($lngDelta/2) * sin($lngDelta/2);
        $c = 2 * atan2(sqrt($a), sqrt(1-$a));
        $distance = $earthRadius * $c;
        return $distance;
    }

    public function beforeSave($insert)
    {
        if (!parent::beforeSave($insert)) {
            return false;
        }

        if ($this->distance === null) {
            $this->distance = $this->computeTotalDistance();
        }

        return true;
    }

    public function getFormattedCoordinates()
    {
        return App::foreach($this->coordinates, function($coordinate) {
            $date = App::formatter()->asDateToTimezone(date('m/d/Y h:i:s A', (int)($coordinate['timestamp'] / 1000)), 'm/d/Y h:i:s A');
            return [
                'lat' => $coordinate['lat'],
                'lon' => $coordinate['lon'],
                'description' => <<< HTML
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th colspan="2" class="text-center">Waypoint Details</th>
                            </tr>
                            <tr>
                                <th>timestamp</th>
                                <td class="nowrap">{$date}</td>
                            </tr>
                            <tr>
                                <th>Latitude</th>
                                <td>{$coordinate['lat']}</td>
                            </tr>
                            <tr>
                                <th>Longitude</th>
                                <td>{$coordinate['lon']}</td>
                            </tr>
                        </tbody>
                    </table>
                HTML
            ];
        }, false);
    }

    public function getTravelHours()
    {
        if ($this->total_time) {
            return App::formatter()->asMillisecondsToReadable($this->total_time);
        }

        if (($coordinates = $this->coordinates) != null) {
            $coordinates = is_array($coordinates) ? $coordinates: json_decode($coordinates, true);
            $general = App::component('general');
            
            $firstItem = reset($coordinates);
            $lastItem = end($coordinates);

            $first = $firstItem['timestamp'] ?? 0;
            $last = $lastItem['timestamp'] ?? 0;

            $startTime = date('Y-m-d H:i:s A', ($first/1000));
            $endTime = date('Y-m-d H:i:s A', ($last/1000));

            $hours = $general->dateDiff($startTime, $endTime, 'h');
            $min = $general->dateDiff($startTime, $endTime, 'i');
            $sec = $general->dateDiff($startTime, $endTime, 's');

            $data = [];

            if ($hours > 0) {
                $data[] = "{$hours} hour" . (($hours > 1) ? 's': '');
            }
            if ($min > 0) {
                $data[] = "{$min} minute" . (($min > 1) ? 's': '');
            }
            if ($sec > 0) {
                $data[] = "{$sec} second" . (($sec > 1) ? 's': '');
            }
            
            return App::formatter()->asImplodeList($data);
        }
    }

    public static function findByKeywords($keywords='', $attributes=[], $limit=10, $andFilterWhere=[])
    {
        return parent::findByKeywordsData($attributes, function($attribute) use($keywords, $limit, $andFilterWhere) {
            return self::find()
                ->select("{$attribute} AS data")
                ->alias('p')
                ->joinWith('user u')
                ->groupBy('data')
                ->where(['LIKE', $attribute, $keywords])
                ->andFilterWhere($andFilterWhere)
                ->limit($limit)
                ->asArray()
                ->all();
        });
    }

    public function getBreadcrumb()
    {
        switch ($this->status) {
            case self::FOR_VALIDATION:
                return ['label' => 'Patrols: For Validation', 'url' => ['patrol/for-validation']];
                break;

            case self::VALIDATED:
                return ['label' => 'Patrols: Validated', 'url' => ['patrol/validated']];
                break;
            
            default:
                return ['label' => 'Patrols', 'url' => $this->indexUrl];
                break;
        }
    }

    public function getActiveMenuLink()
    {
        switch ($this->status) {
            case self::FOR_VALIDATION:
                return '/patrol/for-validation';
                break;

            case self::VALIDATED:
                return '/patrol/validated';
                break;
            
            default:
                return '/patrol';
                break;
        }
    }

    public function getSearchModel()
    {
        switch ($this->status) {
            case self::FOR_VALIDATION:
                return new PatrolSearch([
                    'searchAction' => ['patrol/for-validation'],
                    'searchKeywordUrl' => ['patrol/find-by-keywords', 'status' => self::FOR_VALIDATION],
                ]);
                break;

            case self::VALIDATED:
                return new PatrolSearch([
                    'searchAction' => ['patrol/validated'],
                    'searchKeywordUrl' => ['patrol/find-by-keywords', 'status' => self::VALIDATED],
                ]);
                break;
            
            default:
                return new PatrolSearch();
                break;
        }
    }

    public function getCreateButton()
    {
        switch ($this->status) {
            case self::FOR_VALIDATION:
                return Html::a('Add New Patrol', ['patrol/create', 'status' => self::FOR_VALIDATION], [
                    'class' => 'font-weight-bold btn btn-success font-weight-bolder font-size-sm btn-create'
                ]);
                break;

            case self::VALIDATED:
                return Html::a('Add New Patrol', ['patrol/create', 'status' => self::VALIDATED], [
                    'class' => 'font-weight-bold btn btn-success font-weight-bolder font-size-sm btn-create'
                ]);
                break;
            
            default:
                return $this->createUrl;
                break;
        }
    }

    public static function userFilter()
    {
        $models = self::find()
            ->groupBy('user_id')
            ->all();

        $models = ArrayHelper::map($models, 'user_id', 'userFullname');

        return $models;
    }

    public function getIsForValidation()
    {
        return $this->status == self::FOR_VALIDATION;
    }

    public function getStatusLabel()
    {
        if ($this->isForValidation) {
            return 'For Validation';
        }

        return 'Validated';
    }

    public function getStatusBadge()
    {
        if ($this->isForValidation) {
            return Html::tag('label', 'For Validation', [
                'class' => 'badge badge-primary'
            ]);
        }

        return Html::tag('label', 'Validated', [
            'class' => 'badge badge-success'
        ]);
    }
}