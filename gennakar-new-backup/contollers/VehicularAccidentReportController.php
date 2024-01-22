<?php

namespace app\controllers;

use Yii;
use app\helpers\App;
use app\helpers\ArrayHelper;
use app\models\VehicularAccidentReport;
use app\models\search\VehicularAccidentReportSearch;

/**
 * VehicularAccidentReportController implements the CRUD actions for VehicularAccidentReport model.
 */
class VehicularAccidentReportController extends Controller 
{
    public function actionFindByKeywords($keywords='')
    {
        return $this->asJson(
            VehicularAccidentReport::findByKeywords($keywords, [
                'control_no',
                'code',
                'main_cause',
                'preferred_by',
                'noted_by',
            ])
        );
    }

    /**
     * Lists all VehicularAccidentReport models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new VehicularAccidentReportSearch();
        $dataProvider = $searchModel->search(['VehicularAccidentReportSearch' => App::queryParams()]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single VehicularAccidentReport model.
     * @param integer $id
     * @return mixed
     * @throws ForbiddenHttpException if the model cannot be found
     */
    public function actionView($token)
    {
        return $this->render('view', [
            'model' => VehicularAccidentReport::controllerFind($token, 'token'),
        ]);
    }

    /**
     * Creates a new VehicularAccidentReport model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($token='', $tab='general-information')
    {
        $model = VehicularAccidentReport::findOrCreate(['token' => $token]);
        if ($model->isNewRecord) {
            if ($tab != 'general-information') {
                App::warning('Please complete general information first');

                return $this->redirect(['create']);
            }

            $model->setInitData();
            $model->record_status = VehicularAccidentReport::RECORD_DRAFT;
            $model->date = App::formatter()->asDateToTimezone('', 'm/d/Y');
        }

        $stepId = ArrayHelper::map($model::STEP_FORM, 'slug', 'id')[$tab];

        if (($post = App::post()) != null) {
            if ($tab == 'review') {
                $model->record_status = VehicularAccidentReport::RECORD_ACTIVE;
            }
            elseif ($tab == 'general-information') {
                $post['VehicularAccidentReport']['photos'] = $post['VehicularAccidentReport']['photos'] ?? [];
                $post['VehicularAccidentReport']['other_damages'] = $post['VehicularAccidentReport']['other_damages'] ?? [];
            }

            if ($model->load($post) && $model->save()) {
                App::success('Successfully Created');

                if ($tab == 'review') {
                    return $this->redirect($model->viewUrl);
                }

                return $this->redirect([
                    'create',
                    'token' => $model->token,
                    'tab' => ArrayHelper::map($model::STEP_FORM, 'id', 'slug')[$stepId + 1]
                ]);

                return $this->redirect($model->viewUrl);
            }
        }

        $model->flashErrors();

        return $this->render('create', [
            'model' => $model,
            'tab' => $tab,
        ]);
    }

    /**
     * Duplicates a new VehicularAccidentReport model.
     * If duplication is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionDuplicate($token)
    {
        $originalModel = VehicularAccidentReport::controllerFind($token, 'token');
        $model = new VehicularAccidentReport();
        $model->attributes = $originalModel->attributes;

        if ($model->load(App::post()) && $model->save()) {
            App::success('Successfully Duplicated');

            return $this->redirect($model->viewUrl);
        }

        return $this->render('duplicate', [
            'model' => $model,
            'originalModel' => $originalModel,
        ]);
    }

    /**
     * Updates an existing VehicularAccidentReport model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws ForbiddenHttpException if the model cannot be found
     */
    public function actionUpdate($token='', $tab='general-information')
    {
        $model = VehicularAccidentReport::controllerFind($token, 'token');
        $stepId = ArrayHelper::map($model::STEP_FORM, 'slug', 'id')[$tab];

        if (($post = App::post()) != null) {
            if ($tab == 'review') {
                $model->record_status = VehicularAccidentReport::RECORD_ACTIVE;
            }
            elseif ($tab == 'general-information') {
                $post['VehicularAccidentReport']['photos'] = $post['VehicularAccidentReport']['photos'] ?? [];
                $post['VehicularAccidentReport']['other_damages'] = $post['VehicularAccidentReport']['other_damages'] ?? [];
            }

            if ($model->load($post) && $model->save()) {
                App::success('Successfully Created');

                if ($tab == 'review') {
                    return $this->redirect($model->viewUrl);
                }

                return $this->redirect([
                    'update',
                    'token' => $model->token,
                    'tab' => ArrayHelper::map($model::STEP_FORM, 'id', 'slug')[$stepId + 1]
                ]);

                return $this->redirect($model->viewUrl);
            }
        }

        $model->flashErrors();

        return $this->render('update', [
            'model' => $model,
            'tab' => $tab,
        ]);
    }

    /**
     * Deletes an existing VehicularAccidentReport model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws ForbiddenHttpException if the model cannot be found
     */
    public function actionDelete($token)
    {
        $model = VehicularAccidentReport::controllerFind($token, 'token');

        if($model->delete()) {
            App::success('Successfully Deleted');
        }
        else {
            App::danger(json_encode($model->errors));
        }

        return $this->redirect($model->indexUrl);
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

    public function actionPrintable($token)
    {
        $this->layout  = 'print';
        return $this->render('printable', [
            'model' => VehicularAccidentReport::controllerFind($token, 'token'),
        ]);
    }

    public function actionPrintableDataPrivacy($token)
    {
        $this->layout  = 'print';
        return $this->render('printable-data-privacy', [
            'model' => VehicularAccidentReport::controllerFind($token, 'token'),
        ]);
    }

    public function actionPrintableAttachment($token)
    {
        $this->layout  = 'print';
        return $this->render('printable-attachment', [
            'model' => VehicularAccidentReport::controllerFind($token, 'token'),
        ]);
    }

    public function actionSummary()
    {
        $searchModel = new VehicularAccidentReportSearch();
        $dataProvider = $searchModel->search(['VehicularAccidentReportSearch' => App::queryparams()]);

        $date = App::getFormattedDate();

        $dataForCurrentWeek = function() use ($dataProvider, $date) {
            $dateModifier = App::getFormattedDate('-180 days');
            return $this->getDataForDateRange($dataProvider, $date, $dateModifier);
        };

        $dataForCurrentMonth = function() use ($dataProvider, $date) {
            $dateModifier = App::getFormattedDate('first day of this month');
            return $this->getDataForDateRange($dataProvider, $date, $dateModifier);
        };

//        print_r(count($dataForCurrentMonth()->models));die;
        print_r(count($dataForCurrentWeek()->models));die;
        
        return $this->render('summary', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    function getDataForDateRange($dataProvider, $date, $dateModifier) {
        $data = clone $dataProvider; // Clone to avoid modifying the original dataProvider

        $data->query->andFilterWhere(['between', 'created_at', $dateModifier, $date]);

        return $data;
    }

}