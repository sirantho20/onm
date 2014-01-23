<?php
/* @var $this AccountUsersController */
/* @var $model AccountUsers */
?>

<?php
$this->breadcrumbs=array(
	'Account Users'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List AccountUsers', 'url'=>array('index')),
	array('label'=>'Create AccountUsers', 'url'=>array('create')),
	array('label'=>'View AccountUsers', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage AccountUsers', 'url'=>array('admin')),
);
?>

    <h1>Update AccountUsers <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>