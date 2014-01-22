<?php
/* @var $this GensetReportController */
/* @var $model GensetReport */
?>

<?php
$this->breadcrumbs=array(
	'Genset Reports'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List GensetReport', 'url'=>array('index')),
	array('label'=>'Manage GensetReport', 'url'=>array('admin')),
);
?>

<h1>Create GensetReport</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>