<?php
/* @var $this ContractorAccountsController */
/* @var $model ContractorAccounts */
?>

<?php
$this->breadcrumbs=array(
	'Contractor Accounts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ContractorAccounts', 'url'=>array('index')),
	array('label'=>'Manage ContractorAccounts', 'url'=>array('admin')),
);
?>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>