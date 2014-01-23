<?php
/* @var $this AccountUsersController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Account Users',
);

$this->menu=array(
	array('label'=>'Create AccountUsers','url'=>array('create')),
	array('label'=>'Manage AccountUsers','url'=>array('admin')),
);
?>

<h1>Account Users</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>