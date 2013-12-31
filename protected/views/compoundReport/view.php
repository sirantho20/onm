<?php
/* @var $this CompoundReportController */
/* @var $model CompoundReport */
?>

<?php
$this->breadcrumbs=array(
	'Compound Reports'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List CompoundReport', 'url'=>array('index')),
	array('label'=>'Create CompoundReport', 'url'=>array('create')),
	array('label'=>'Update CompoundReport', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete CompoundReport', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage CompoundReport', 'url'=>array('admin')),
);
?>

<h1>View CompoundReport #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'gate_and_lock_ok',
		'site_neat_tidy',
		'weed_growing',
		'fence_in_good_condition',
		'gate_and_lock_ok_ACTION',
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
	),
)); ?>