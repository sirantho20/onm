<?php
/* @var $this ContractorAccountsController */
/* @var $model ContractorAccounts */
?>

<?php
$this->breadcrumbs=array(
	'Contractor Accounts'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ContractorAccounts', 'url'=>array('index')),
	array('label'=>'Create ContractorAccounts', 'url'=>array('create')),
	array('label'=>'Update ContractorAccounts', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ContractorAccounts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ContractorAccounts', 'url'=>array('admin')),
);
?>

<h1>View ContractorAccounts #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'account_name',
		'account_type',
		'email_address',
		'mobile_number',
		'date_added',
		'dateupdated',
	),
)); ?>