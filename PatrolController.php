<?php


namespace app\controllers;

use app\helpers\StringHelper;
use app\models\form\user\ProfileForm;
use Yii;
use app\helpers\App;
use app\helpers\ArrayHelper;
use app\helpers\Html;
use app\helpers\Url;
use app\models\Patrol;
use app\models\Tree;
use app\models\search\PatrolSearch;
use app\models\search\TreeSearch;

/**
 * PatrolController implements the CRUD actions for Patrol model.
 */
class PatrolController extends Controller
{

    public function actionFindByKeywords($keywords = '', $status = null)
    {
        return $this->asJson(
            Patrol::findByKeywords($keywords, [
                'u.username',
                'u.user_full_name',
                'p.user_id',
                'p.watershed',
                'p.date',
                'p.notes',
                'p.distance',
            ], 10, [
                'p.status' => $status
            ])
        );
    }

    /**
     * Lists all Patrol models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new PatrolSearch();
        $dataProvider = $searchModel->search(['PatrolSearch' => App::queryParams()]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Patrol model.
     * @param integer $id
     * @return mixed
     * @throws ForbiddenHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = Patrol::controllerFind($id);
        $searchModel = new TreeSearch();
        $queryParams = App::queryParams();
        if (isset($queryParams['id'])) {
            unset($queryParams['id']);
        }
        $dataProvider = $searchModel->search(['TreeSearch' => $queryParams]);
        $dataProvider->query->andWhere(['patrol_id' => $model->id]);

        $searchModelFauna = new \app\models\search\FaunaSearch();
        $dataProviderFauna = $searchModelFauna->search(['FaunaSearch' => $queryParams]);
        $dataProviderFauna->query->andWhere(['patrol_id' => $model->id]);
        
        $searchModelIncident = new \app\models\search\EnvironmentalIncidentSearch();
        $dataProviderIncident = $searchModelIncident->search(['EnvironmentalIncidentSearch' => $queryParams]);
        $dataProviderIncident->query->andWhere(['patrol_id' => $model->id]);

        $data = $dataProvider->models;
        $trees = ArrayHelper::toArray($data, [
            'Patrol' => []
        ]);

        // Iterate through the $trees array and update the 'photo_url' key
        foreach ($trees as &$value) {
            if (isset($value['photos'][0])) {
                $value['photo_url'] = Url::image($value['photos'][0], ['w' => 100, 'h' => 100], true);
            } else {
                $value['photo_url'] = ''; // Provide a default value if 'photos' is empty or undefined
            }
        }

        // Don't forget to unset the reference to avoid modifying $trees unintentionally
        // unset($value);
        
        return $this->render('view', [
            'model' => $model,
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
            'trees' => $trees,
            'dataProviderFauna' => $dataProviderFauna,
            'searchModelFauna' => $searchModelFauna,
            'dataProviderIncident' => $dataProviderIncident,
            'searchModelIncident' => $searchModelIncident,
        ]);
    }

    /**
     * Creates a new Patrol model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($status = Patrol::FOR_VALIDATION)
    {
        $model = new Patrol([
            'status' => $status,
            'user_id' => App::identity('id')
        ]);

        if (($post = App::post()) != null) {
            $post['Patrol']['coordinates'] = array_values($post['Patrol']['coordinates'] ?? []);
            $post['Patrol']['status'] = $status;
            $post['Patrol']['user_id'] = App::identity('id');

            if ($model->load($post) && $model->save()) {
                App::success('Successfully Created');
                return $this->redirect($model->viewUrl);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Duplicates a new Patrol model.
     * If duplication is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionDuplicate($id)
    {
        $originalModel = Patrol::controllerFind($id);
        $model = new Patrol();
        $model->attributes = $originalModel->attributes;

        if (($post = App::post()) != null) {
            $post['Patrol']['coordinates'] = array_values($post['Patrol']['coordinates'] ?? []);
            if ($model->load($post) && $model->save()) {
                App::success('Successfully Duplicated');
                return $this->redirect($model->viewUrl);
            }
        }

        return $this->render('duplicate', [
            'model' => $model,
            'originalModel' => $originalModel,
        ]);
    }

    /**
     * Updates an existing Patrol model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws ForbiddenHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = Patrol::controllerFind($id);

        if (($post = App::post()) != null) {
            $post['Patrol']['coordinates'] = array_values($post['Patrol']['coordinates'] ?? []);
            if ($model->load($post) && $model->save()) {
                App::success('Successfully Updated');
                return $this->redirect($model->viewUrl);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
    
    
    
    
    
//    public function actionReport()
//     {
        
        
//         $searchModel = new PatrolSearch();
//         $dataProvider = $searchModel->search(['PatrolSearch' => App::queryParams()]);
        
        
//         $datas= $dataProvider->query
//         ->select(["u.fpo_cluster", "count(u.id) as total_count", "p.barangay", " sum(p.distance) as total_distance"])
//         ->andWhere("p.barangay is not null and p.barangay<>'' and u.fpo_cluster is not null ")
//         ->groupBy([
//               "u.fpo_cluster",
//               "p.barangay"
            
//         ])
//         ->orderBy(['fpo_cluster'=>SORT_ASC])
//         ->asArray()
//        //->all()
//         ;
//        // print_r($datas);
//        // exit;
       
//         $searchModelmap = new PatrolSearch([
//             'searchAction' => ['patrol/map']
//         ]);


//         $queryParams = App::queryParams();
//         $queryParams['show_user_photo'] = $queryParams['show_user_photo'] ?? 0;
//         $dataProvidermap = $searchModelmap->search(['PatrolSearch' => $queryParams]);

//         $data = $dataProvidermap->models;
//         $coordinates = [];

//         foreach ($data as $value) {
//             $user_id = $value->user_id;
//             $profile = new ProfileForm(['user_id' => $user_id]);
//             $user_fullName = $profile->getFullname();

//             $coordinatesArray = $value->attributes['coordinates'];

//             $userCoordinates = array_map(function ($coordinate) use ($user_id, $user_fullName) {
//                 $coordinate['user_id'] = $user_id;
//                 $coordinate['full_name'] = $user_fullName;
//                 return $coordinate;
//             }, $coordinatesArray);

//             if (!empty($userCoordinates)) {
//                 $coordinates[] = $userCoordinates;
//             }
//         }
        
        
        
        
//       //  print_r($coordinates);
//         //exit;
        

//         return $this->render('report', [
//             'searchModel' => $searchModel,
//             'dataProvider' => $dataProvider,
//             // 'dataProvider' => [],
//              'coordinates'=>$coordinates
//         ]);
        
        
        
//     }
    
    
public function actionReport()
    {
        
        
        $searchModel = new PatrolSearch();
        $dataProvider = $searchModel->search(['PatrolSearch' => App::queryParams()]);

        print_r($dataProvider['models']);
        die;
                
        $datas= $dataProvider->query
        ->select(["u.fpo_cluster", "count(u.id) as total_count", "p.barangay", " sum(p.distance) as total_distance"])
        ->andWhere("p.barangay is not null and p.barangay<>'' and u.fpo_cluster is not null ")
        ->groupBy([
              "u.fpo_cluster",
              "p.barangay"
            
        ])
        ->orderBy(['fpo_cluster'=>SORT_ASC])
        ->asArray()
    //    ->all()
        ;
    //    // print_r($datas);
    //    // exit;

        $searchModelmap = new PatrolSearch([
            'searchAction' => ['patrol/map']
        ]);

        $queryParams = App::queryParams();
        $queryParams['show_user_photo'] = $queryParams['show_user_photo'] ?? 0;
        $dataProvidermap = $searchModelmap->search(['PatrolSearch' => $queryParams]);

        print_r(d);
        die;

        $data = $dataProvidermap->models;
        $coordinates = [];

        foreach ($data as $value) {
            $user_id = $value->user_id;
            $profile = new ProfileForm(['user_id' => $user_id]);
            $user_fullName = $profile->getFullname();

            $coordinatesArray = $value->attributes['coordinates'];

            $userCoordinates = array_map(function ($coordinate) use ($user_id, $user_fullName) {
                $coordinate['user_id'] = $user_id;
                $coordinate['full_name'] = $user_fullName;
                return $coordinate;
            }, $coordinatesArray);

            if (!empty($userCoordinates)) {
                $coordinates[] = $userCoordinates;
            }
        }
        
      //  print_r($coordinates);
        //exit;

        // print_r(($dataProvider->models));
        foreach($dataProvider->models as $key){
            print_r($key->related[0]);

            // $models = ($key->related)->models;

            // foreach($models as $key2){
            //     print_r($key2);
            // }
        }
        die;

        // die;
        
        return $this->render('report', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
             'coordinates'=>$coordinates
        ]);
        
        
        
    }
    
    

    /**
     * Deletes an existing Patrol model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws ForbiddenHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $model = Patrol::controllerFind($id);

        if ($model->delete()) {
            App::success('Successfully Deleted');
        } else {
            App::danger(json_encode($model->errors));
        }

        return $this->redirect($model->activeMenuLink);
    }

    public function actionChangeRecordStatus()
    {
        return $this->changeRecordStatus();
    }

    public function actionBulkAction()
    {
        return $this->bulkAction();
    }

    public function actionPrint()
    {
        return $this->exportPrint();
    }

    public function actionExportPdf()
    {
        return $this->exportPdf();
    }

    public function actionExportCsv()
    {
        return $this->exportCsv();
    }

    public function actionExportXls()
    {
        return $this->exportXls();
    }

    public function actionExportXlsx()
    {
        return $this->exportXlsx();
    }

    public function actionInActiveData()
    {
        # dont delete; use in condition if user has access to in-active data
    }

    public function actionPrintReport($id)
    {
        $model = Patrol::controllerFind($id);
        $trees = Tree::findAll(['patrol_id' => $model->id]);

        $this->layout = 'print';
        return $this->render('print-report', [
            'model' => $model,
            'trees' => $trees,
        ]);
    }

    public function actionForValidation()
    {
        $searchModel = new PatrolSearch([
            'searchAction' => ['patrol/for-validation'],
            'searchKeywordUrl' => ['patrol/find-by-keywords', 'status' => Patrol::FOR_VALIDATION],
        ]);
        $dataProvider = $searchModel->search(['PatrolSearch' => App::queryParams()]);
        $dataProvider->query->andWhere(['p.status' => Patrol::FOR_VALIDATION]);

        $searchModel->status = Patrol::FOR_VALIDATION;

        return $this->render('for-validation', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionValidated()
    {
        $searchModel = new PatrolSearch([
            'searchAction' => ['patrol/validated'],
            'searchKeywordUrl' => ['patrol/find-by-keywords', 'status' => Patrol::VALIDATED],
        ]);


        $dataProvider = $searchModel->search(['PatrolSearch' => App::queryParams()]);
        $dataProvider->query->andWhere(['p.status' => Patrol::VALIDATED]);

        $searchModel->status = Patrol::VALIDATED;

        return $this->render('validated', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionMap()
    {
        $searchModel = new PatrolSearch([
            'searchAction' => ['patrol/map']
        ]);


        $queryParams = App::queryParams();
        $queryParams['show_user_photo'] = $queryParams['show_user_photo'] ?? 0;
        $dataProvider = $searchModel->search(['PatrolSearch' => $queryParams]);
        $dataProvider->pagination=false;

        $data = $dataProvider->models;
        $coordinates = [];

        foreach ($data as $value) {
            $user_id = $value->user_id;
            $profile = new ProfileForm(['user_id' => $user_id]);
            $user_fullName = $profile->getFullname();

            $coordinatesArray = $value->attributes['coordinates'];

            $userCoordinates = array_map(function ($coordinate) use ($user_id, $user_fullName) {
                $coordinate['user_id'] = $user_id;
                $coordinate['full_name'] = $user_fullName;
                return $coordinate;
            }, $coordinatesArray);

            if (!empty($userCoordinates)) {
                $coordinates[] = $userCoordinates;
            }
        }

        // $coordinates = App::foreach($dataProvider->models, function ($model) use($searchModel) {
        //     $data = App::foreach(array_values($model->coordinates), function($d) use($model, $searchModel) {
        //         $photo = Url::image($model->userPhoto, ['w' => 25]);
        //         $timestamp = App::formatter()->asDateToTimezone(date('m/d/Y h:i:s A', ($d['timestamp'] / 1000)), 'm/d/Y h:i:s A');

        //         $d['description'] = <<< HTML
        //             <div> 
        //                 <strong>Patroller</strong>: {$model->username}
        //                 <br><strong>Latitude</strong>: {$d['lat']}
        //                 <br><strong>Longitude</strong>: {$d['lon']}
        //                 <br><strong>Timestamp</strong>: {$timestamp}
        //             </div>
        //         HTML;
        //         if ($searchModel->show_user_photo == 0) {
        //             return $d;
        //         }
        //         $d['mapStartMarkerUrl'] = $photo;
        //         $d['mapEndMarkerUrl'] = $photo;

        //         $d['user_id'] = $model->user_id;
        //         return $d;
        //     }, false);

        //     if ($data) {
        //         $data[0]['description'] = Html::tag('div', Html::tag('b', 'START OF PATROL')) . $data[0]['description'];

        //         if (($length = count($data)) > 1) {
        //             $data[$length-1]['description'] = Html::tag('div', Html::tag('b', 'END OF PATROL')) . $data[$length-1]['description'];
        //         }
        //     }

        //     return $data;
        // }, false);

        // foreach($coordinates as $key1 => $value1){
        //     // ob_start();
        //     foreach($value1 as $key2 => $value2){

        //         // print_r($value2['timestamp']);

        //         $timestamp = $value2['timestamp'];
        //         if (strtotime($timestamp) === false) {
        //             echo "Invalid timestamp: $timestamp\n";
        //         } else {
        //             echo "Valid timestamp: $timestamp\n";
        //         }

        //     }
        //     // return ob_get_clean();
        // }


        //   die;


        // $models = Patrol::find()
        //     ->groupBy('user_id')
        //     ->all();
        //     print_r($models);

        // die;

        return $this->render('map', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
            'coordinates' => $coordinates,
        ]);

    }

    public function actionValidate($id)
    {
        $model = Patrol::controllerFind($id);
        $model->status = Patrol::VALIDATED;

        if ($model->save()) {
            App::success('Successfully Vlidated');
        } else {
            App::danger(json_encode($model->errors));
        }

        return $this->redirect(App::referrer());
    }


    public function actionTestMap()
    {

        return $this->render('test-map');
    }

}