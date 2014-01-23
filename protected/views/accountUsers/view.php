<?php
/* @var $this AccountUsersController */
/* @var $model AccountUsers */
?>

<?php
$this->breadcrumbs=array(
	'Account Users'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List AccountUsers', 'url'=>array('index')),
	array('label'=>'Create AccountUsers', 'url'=>array('create')),
	array('label'=>'Update AccountUsers', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete AccountUsers', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage AccountUsers', 'url'=>array('admin')),
);
?>

<h1>View AccountUsers #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'account_id',
		'first_name',
		'last_name',
		'email_address',
		'pword',
		'date_added',
		'date_updated',
		'username',
		'mobile_number',
		'role',
	),
)); ?>