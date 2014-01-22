<?php
/* @var $this SiteIssuesController */
/* @var $model SiteIssues */
?>

<?php
$this->breadcrumbs=array(
	'Site Issues'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'Site Issues', 'url'=>array('index')),
	array('label'=>'Manage Issues', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>