<?php
/* @var $this SiteIssuesController */
/* @var $model SiteIssues */
?>

<?php
$this->breadcrumbs=array(
	'Site Issues'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List SiteIssues', 'url'=>array('index')),
	array('label'=>'Create SiteIssues', 'url'=>array('create')),
	array('label'=>'View SiteIssues', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SiteIssues', 'url'=>array('admin')),
);
?>

   <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' =>"Update Site Issue $model->id",
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
        

<?php $this->renderPartial('_form', array('model'=>$model)); ?>

</div>
<?php $this->endWidget(); ?>