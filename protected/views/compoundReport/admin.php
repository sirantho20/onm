<?php
/* @var $this CompoundReportController */
/* @var $model CompoundReport */


$this->breadcrumbs=array(
	'Compound Reports'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List CompoundReport', 'url'=>array('index')),
	array('label'=>'Create CompoundReport', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#compound-report-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Compound Reports</h1>

<p>
    You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
        &lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'compound-report-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'gate_and_lock_ok',
		'site_neat_tidy',
		'weed_growing',
		'fence_in_good_condition',
		'gate_and_lock_ok_ACTION',
		/*
		'gate_and_lock_ok_ACTION_DATE',
		'gate_and_lock_ok_FS_COMMENT',
		'site_neat_tidy_ACTION',
		'site_neat_tidy_ACTION_DATE',
		'site_neat_tidy_FS_COMMENT',
		'weed_growing_ACTION',
		'weed_growing_ACTION_DATE',
		'weed_growing_FS_COMMENT',
		'fence_in_good_condition_ACTION',
		'fence_in_good_condition_ACTION_DATE',
		'fence_in_good_condition_FS_COMMENT',
		'retaining_walls_condition_cracks',
		'retaining_walls_condition_cracks_ACTION',
		'retaining_walls_condition_cracks_ACTION_DATE',
		'retaining_walls_condition_cracks_FS_COMMENT',
		'sign_of_flooding',
		'sign_of_flooding_ACTION',
		'sign_of_flooding_ACTION_DATE',
		'sign_of_flooding_FS_COMMENT',
		'ecg_meter_box_secured',
		'ecg_meter_box_secured_ACTION',
		'ecg_meter_box_secured_ACTION_DATE',
		'ecg_meter_box_secured_FS_COMMENT',
		'security_guard_on_site',
		'security_guard_on_site_ACTION',
		'security_guard_on_site_ACTION_DATE',
		'security_guard_on_site_FS_COMMENT',
		'log_book_on_site',
		'log_book_on_site_ACTION',
		'log_book_on_site_ACTION_DATE',
		'log_book_on_site_FS_COMMENT',
		'avr_on_site',
		'avr_on_site_ACTION',
		'avr_on_site_ACTION_DATE',
		'avr_on_site_FS_COMMENT',
		'avr_operational',
		'avr_operational_ACTION',
		'avr_operational_ACTION_DATE',
		'avr_operational_FS_COMMENT',
		'fuel_spilage',
		'fuel_spilage_ACTION',
		'fuel_spilage_ACTION_DATE',
		'fuel_spilage_FS_COMMENT',
		'installation_works_since_last_visit',
		'installation_works_since_last_visit_ACTION',
		'installation_works_since_last_visit_ACTION_DATE',
		'installation_works_since_last_visit_FS_COMMENT',
		'report_id',
		'gate_and_lock_ok_FS_COMMENT_DATE',
		'site_neat_tidy_FS_COMMENT_DATE',
		'weed_growing_FS_COMMENT_DATE',
		'fence_in_good_condition_FS_COMMENT_DATE',
		'retaining_walls_condition_cracks_FS_COMMENT_DATE',
		'sign_of_flooding_FS_COMMENT_DATE',
		'ecg_meter_box_secured_FS_COMMENT_DATE',
		'security_guard_on_site_FS_COMMENT_DATE',
		'log_book_on_site_FS_COMMENT_DATE',
		'avr_on_site_FS_COMMENT_DATE',
		'fuel_spilage_FS_COMMENT_DATE',
		'installation_works_since_last_visit_FS_COMMENT_DATE',
		'stataus',
		'closed_date',
		'closed_by',
		*/
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>