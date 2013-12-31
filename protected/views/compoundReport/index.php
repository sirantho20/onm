<?php
/* @var $this CompoundReportController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Compound Reports',
);

$this->menu=array(
	array('label'=>'Create CompoundReport','url'=>array('create')),
	array('label'=>'Manage CompoundReport','url'=>array('admin')),
);
?>

<h1>Compound Reports</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>