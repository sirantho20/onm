<?php
/* @var $this McMonthlyReportController */
/* @var $model McMonthlyReport */


$this->breadcrumbs=array(
	'Mc Monthly Reports'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'New Report', 'url'=>array('create')),
	array('label'=>'Completed Reports', 'url'=>array('admin')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#mc-monthly-report-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

    <?php 
    $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' =>'Monthly Reports',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">

<?php

$this->widget('bootstrap.widgets.TbGridView',array(
	'id'=>'mc-monthly-report-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'company',
                array(
                    'header'=>'Region',
                    'type'=>'raw',
                    'value'=>'SiteDetails::getSiteRegion($data->site_id)',
                ),
		'site_id',
		'checked_by',
		'check_date',
                array(
                    'header'=>'Month',
                    'type'=>'raw',
                    'value'=>'Yii::app()->dateFormatter->format("MMMM", "$data->check_date")',
                ),
		array(
			'class'=>'bootstrap.widgets.TbButtonColumn',
		),
	),
)); ?>

</div>
<?php $this->endWidget(); ?>        