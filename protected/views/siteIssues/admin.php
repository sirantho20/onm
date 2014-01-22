<?php
/* @var $this SiteIssuesController */
/* @var $model SiteIssues */


$this->breadcrumbs=array(
	'Site Issues'=>array('index'),
	'Manage',
);

$this->menu=array(
        array('label'=>'Report New Issue', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#site-issues-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

   <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' =>'Manage Site Issues',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">


<!-- <p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'site-issues-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'site_id',
		'site_name',
		'issue_description',
		'issue_action',
		'issue_action_date',
		'issue_date',
		/*
		'raised_by',
		'fs_comment',
		'fs_comment_date',
		'resolution_date',
		'fs_confirm_resolution',
		'fs_confirm_date',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

</div>
<?php $this->endWidget(); ?>