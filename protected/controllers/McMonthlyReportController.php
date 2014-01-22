<?php

class McMonthlyReportController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/leftbar';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
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
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model = new McMonthlyReport;
                $compound = new CompoundReport();
                $container = new ContainerReport();
                $genset = new GensetReport();
                $power = new PowerReading();
                $misc = new Misc();
                
		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['McMonthlyReport']) && 
                    isset($_POST['CompoundReport']) && 
                    isset($_POST['ContainerReport']) &&
                    isset($_POST['GensetReport']) &&
                    isset($_POST['PowerReading']) &&
                    isset($_POST['Misc'])
                    ) 
                {
                    
			$model->attributes=$_POST['McMonthlyReport'];
                        $compound->attributes=$_POST['CompoundReport'];
                        $container->attributes=$_POST['ContainerReport'];
                        $genset->attributes=$_POST['GensetReport'];
                        $power->attributes=$_POST['PowerReading'];
                        $misc->attributes=$_POST['Misc'];
                        
			if ($model->save())
                        {
                            $compound->report_id = $model->id;
                            $container->report_id = $model->id;
                            $genset->report_id = $model->id;
                            $power->report_id = $model->id;
                            $misc->report_id = $model->id;
                            
                            $compound->save();
                            $container->save();
                            $genset->save();
                            $power->save();
                            $misc->save();
                        
                            Yii::app()->user->setflash('success', 'Report successfully submitted.');
                            $this->redirect(array('admin'));
                        }
                            
                        
		}

		$this->render('create',array(
			'model'=>$model,
                        'compound'=>$compound,
                        'container'=>$container,
                        'genset'=>$genset,
                        'power'=>$power,
                        'misc'=>$misc,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['McMonthlyReport'])) {
			$model->attributes=$_POST['McMonthlyReport'];
			if ($model->save()) {
				$this->redirect(array('view','id'=>$model->id));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		if (Yii::app()->request->isPostRequest) {
			// we only allow deletion via POST request
			$this->loadModel($id)->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax'])) {
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
			}
		} else {
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
		}
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('McMonthlyReport');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new McMonthlyReport();
		$model->unsetAttributes();  // clear any default values
		if (isset($_GET['McMonthlyReport'])) {
			$model->attributes=$_GET['McMonthlyReport'];
		}

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return McMonthlyReport the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=McMonthlyReport::model()->findByPk($id);
		if ($model===null) {
			throw new CHttpException(404,'The requested page does not exist.');
		}
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param McMonthlyReport $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if (isset($_POST['ajax']) && $_POST['ajax']==='mc-monthly-report-form') {
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}