<?php

class TimespanController extends Controller {

    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';

    /**
     * @return array action filters
     */
    public function filters() {
        return array(
            'accessControl', // perform access control for CRUD operations
            'postOnly + delete', // we only allow deletion via POST request
        );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules() {
        return array(
            array('allow', // allow all users to perform 'index' and 'view' actions
                'actions' => array('index', 'view'),
                'users' => array('*'),
            ),
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('create', 'update', 'loadtask'),
                'users' => array('@'),
            ),
            array('allow', // allow admin user to perform 'admin' and 'delete' actions
                'actions' => array('admin', 'delete'),
                'users' => array('admin'),
            ),
            array('deny', // deny all users
                'users' => array('*'),
            ),
        );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id) {
        $this->render('view', array(
            'model' => $this->loadModel($id),
        ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate() {
        $model = new Timespan;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Timespan'])) {
            $_POST['Timespan']['timespan_in'] = CDateTimeParser::parse($_POST['Timespan']['timespan_in'], 'MM/dd/yyyy hh:mm');
            $_POST['Timespan']['timespan_out'] = CDateTimeParser::parse($_POST['Timespan']['timespan_out'], 'MM/dd/yyyy hh:mm');
            $_POST['Timespan']['timespan_time'] = $_POST['Timespan']['timespan_out'] - $_POST['Timespan']['timespan_in'];
            //$_POST['Timespan']['timespan_time'] = CDateTimeParser::parse($_POST['Timespan']['timespan_time'], 'MM/dd/yyyy hh:mm');
            $model->attributes = $_POST['Timespan'];
            //$model->user_id = Yii::app()->User->getId();            
            //$model->project_id = $model->project->id;
            //$model->task_id = $model->task->id;
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->id));
        }

        $this->render('create', array(
            'model' => $model,
        ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Timespan'])) {
            $model->attributes = $_POST['Timespan'];
            if ($model->save()) {
                // $model->user_id =$model->id;
                //$model->project_id = $_POST['Timespan']['project_id'];
                $model->save();
                $this->redirect(array('view', 'id' => $model->id));
            }
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id) {
        $this->loadModel($id)->delete();

        // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
        if (!isset($_GET['ajax']))
            $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $dataProvider = new CActiveDataProvider('Timespan');
        $this->render('index', array(
            'dataProvider' => $dataProvider,
        ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin() {
        $model = new Timespan('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['Timespan']))
            $model->attributes = $_GET['Timespan'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    // added by hb

    public function actionLoadtask() {
        $data = Task::model()->findAll('project_id=:project_id', array(':project_id' => (int) $_POST['project_id']));

        $data = CHtml::listData($data, 'id', 'task_name');

        echo "<option value=''>Selected Task</option>";
        foreach ($data as $value => $task_name)
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($task_name), true);
        
        $data = Groupproject::model()->findAll('project_id=:project_id', array(':project_id' => (int) $_POST['project_id']));
        $data = CHtml::listData($data, 'project_id', 'group_id');
        $data1 = CHtml::listData($data, 'user_id', 'group_id');
        foreach ($data as $value => $group_id)
            $data = Group::model()->with('trackerProjects')->findAll('group_id=:group_id', array(':group_id' => (int) $group_id));
        foreach ($data1 as $value => $user_id)
            $data1 = User::model()->with('trackerGroups')->findAll('user_id=:user_id', array(':user_id' => (int) $user_id));
              
        $data = CHtml::listData($data, 'id', 'group_name');
        $data1 = CHtml::listData($data1, 'id', 'username');
        echo "<option value=''>Selected group</option>";
        foreach ($data as $value => $group_name)
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($group_name), true);
        
        echo "<option value=''>User</option>";
        foreach ($data1 as $value => $username)
            echo CHtml::tag('option', array('value' => $value), CHtml::encode($username), true);
        
    }
     protected function gridInColumn($data,$row)
     {
          // ... generate the output for the column
 
          // Params:
          // $data ... the current row data   -
         // $row ... the row index 
         
          $theCellValue =   yii::app()->dateFormatter->format('MM/dd/yyyy hh:mm a',$data->timespan_in);
         return $theCellValue;    
    }
     protected function gridOutColumn($data,$row)
     {
          // ... generate the output for the column
 
          // Params:
          // $data ... the current row data   -
         // $row ... the row index 
         
          $theCellValue =   yii::app()->dateFormatter->format('MM/dd/yyyy hh:mm a',$data->timespan_out);
         return $theCellValue;    
    }  
    protected function gridTimeColumn($data,$row)
     {
          // ... generate the output for the column
 
          // Params:
          // $data ... the current row data   -
         // $row ... the row index 
        $hh = $data->timespan_time/3600;
        $mm = $data->timespan_time%3600;
        //$data = echo "$hh . ":" . $mm";
         
         // $theCellValue =   yii::app()->dateFormatter->format('hh:mm',$data->timespan_time);
         return $hh . " hr " . $mm . " min";    
    }   

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return Timespan the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = Timespan::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param Timespan $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'timespan-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
