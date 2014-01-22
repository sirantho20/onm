<?php
/* @var $this SiteIssuesController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Site Issues',
);

$this->menu=array(
	array('label'=>'Create SiteIssues','url'=>array('create')),
	array('label'=>'Manage SiteIssues','url'=>array('admin')),
);
?>

<h1>Site Issues</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>