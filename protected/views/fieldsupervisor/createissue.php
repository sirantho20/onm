<?php
/* @var $this FieldsupervisorController */

$this->breadcrumbs=array(
	'Fieldsupervisor'=>array('/fieldsupervisor'),
	'Createissue',
);

$this->menu=array(
	array('label'=>'Outstanding Issues','url'=>array('index')),
	array('label'=>'Create Issues','url'=>array('createissue')),
);

?>

<?php
$this->renderPartial('/siteIssues/_form', array('model'=>$model));
?>
