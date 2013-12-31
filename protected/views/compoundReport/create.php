<?php
/* @var $this CompoundReportController */
/* @var $model CompoundReport */
?>

<?php
$this->breadcrumbs=array(
	'Compound Reports'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List CompoundReport', 'url'=>array('index')),
	array('label'=>'Manage CompoundReport', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>