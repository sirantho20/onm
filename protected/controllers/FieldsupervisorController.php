<?php


class FieldsupervisorController extends Controller
{
        public $layout = '//layouts/leftbar';
        
	public function actionCreateissue()
	{
                $model = new SiteIssues();
                
		$this->render('createissue', array('model'=>$model));
	}

	public function actionIndex()
	{
		$this->render('index');
	}

	public function actionUpdateissue()
	{
		$this->render('updateissue');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}