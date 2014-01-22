<?php
/* @var $this McMonthlyReportController */
/* @var $model McMonthlyReport */
?>

<?php
$this->breadcrumbs=array(
	'Mc Monthly Reports'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'New Report', 'url'=>array('create')),
	array('label'=>'Completed Reports', 'url'=>array('admin')),
);
?>

<h1>View McMonthlyReport #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'id',
		'company',
		'region',
		'site_id',
		'checked_by',
		'check_date',
	),
)); ?>