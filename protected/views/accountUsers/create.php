<?php
/* @var $this AccountUsersController */
/* @var $model AccountUsers */
?>

<?php
$this->breadcrumbs=array(
	'Account Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List AccountUsers', 'url'=>array('index')),
	array('label'=>'Manage AccountUsers', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>