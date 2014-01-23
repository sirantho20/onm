<?php
/* @var $this ContractorAccountsController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Contractor Accounts',
);

$this->menu=array(
	array('label'=>'Create ContractorAccounts','url'=>array('create')),
	array('label'=>'Manage ContractorAccounts','url'=>array('admin')),
);
?>

<h1>Contractor Accounts</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>