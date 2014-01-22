<?php
/* @var $this MiscController */
/* @var $model Misc */
?>

<?php
$this->breadcrumbs=array(
	'Miscs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Misc', 'url'=>array('index')),
	array('label'=>'Manage Misc', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>