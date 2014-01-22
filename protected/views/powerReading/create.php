<?php
/* @var $this PowerReadingController */
/* @var $model PowerReading */
?>

<?php
$this->breadcrumbs=array(
	'Power Readings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PowerReading', 'url'=>array('index')),
	array('label'=>'Manage PowerReading', 'url'=>array('admin')),
);
?>

<h1>Create PowerReading</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>