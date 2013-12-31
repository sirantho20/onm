<?php
/* @var $this CompoundReportController */
/* @var $model CompoundReport */
?>

<?php
$this->breadcrumbs=array(
	'Compound Reports'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List CompoundReport', 'url'=>array('index')),
	array('label'=>'Create CompoundReport', 'url'=>array('create')),
	array('label'=>'View CompoundReport', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage CompoundReport', 'url'=>array('admin')),
);
?>

    <h1>Update CompoundReport <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>