<?php
/* @var $this SiteIssuesController */
/* @var $model SiteIssues */
?>

<?php
$this->breadcrumbs=array(
	'Site Issues'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SiteIssues', 'url'=>array('index')),
	array('label'=>'Create SiteIssues', 'url'=>array('create')),
	array('label'=>'Update SiteIssues', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SiteIssues', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SiteIssues', 'url'=>array('admin')),
);
?>

<h1>View SiteIssues #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'report_id',
		'issue_description',
		'issue_action',
		'issue_action_date',
		'issue_date',
		'raised_by',
		'fs_comment',
		'fs_comment_date',
		'resolution_date',
		'fs_confirm_resolution',
		'fs_confirm_date',
		'site_id',
		'site_name',
		'issue_type',
	),
)); ?>