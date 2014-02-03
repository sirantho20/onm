<?php
/* @var $this ContractorAccountsController */
/* @var $model ContractorAccounts */


$this->breadcrumbs=array(
	'Contractor Accounts'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List ContractorAccounts', 'url'=>array('index')),
	array('label'=>'Create ContractorAccounts', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#contractor-accounts-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
   <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' =>'Manage Contractor Accounts',
    'headerIcon' => 'icon-user',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'contractor-accounts-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'account_name',
		'account_type',
		'email_address',
		'mobile_number',
		'date_added',
		/*
		'dateupdated',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

   </div>
   <?php $this->endWidget(); ?>