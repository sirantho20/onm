<?php
/* @var $this McMonthlyReportController */
/* @var $model McMonthlyReport */
?>

<?php
$this->breadcrumbs=array(
	'Mc Monthly Reports'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'New Report', 'url'=>array('create')),
	array('label'=>'Completed Reports', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model, 
    'compound'=>$compound,
    'compound'=>$compound,
    'container'=>$container,
    'genset'=>$genset,
    'power'=>$power,
    'misc'=>$misc,
    )); ?>


