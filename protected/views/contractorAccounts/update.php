<?php
/* @var $this ContractorAccountsController */
/* @var $model ContractorAccounts */
?>

<?php
$this->breadcrumbs=array(
	'Contractor Accounts'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List ContractorAccounts', 'url'=>array('index')),
	array('label'=>'Create ContractorAccounts', 'url'=>array('create')),
	array('label'=>'View ContractorAccounts', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage ContractorAccounts', 'url'=>array('admin')),
);
?>

    <h1>Update ContractorAccounts <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>