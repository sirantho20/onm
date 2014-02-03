<?php
/* @var $this AccountUsersController */
/* @var $model AccountUsers */


$this->breadcrumbs=array(
	'Account Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List AccountUsers', 'url'=>array('index')),
	array('label'=>'Create AccountUsers', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#account-users-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

   <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' =>'Manage Account Users',
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
	'id'=>'account-users-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                array(
                    'header'=>'Account',
                    'type'=>'raw',
                    'value'=>'$data->account->account_name',
                ),
		'first_name',
		'last_name',
		'email_address',
		/*
		'date_added',
		'date_updated',
		'username',
		'mobile_number',
		'role',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>
   </div>
   <?php $this->endWidget(); ?>