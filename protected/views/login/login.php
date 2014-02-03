<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
        'htmlOptions'=>array('role'=>'form'),
	'enableClientValidation'=>false,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="form-group">
		<?php echo $form->labelEx($model,'username', array('for'=>'username')); ?>
		<?php echo $form->textField($model,'username', array('class'=>'form-control input-sm')); ?>
		<?php //echo $form->error($model,'username'); ?>
	</div>

	<div class="form-group">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password', array('class'=>'form-control input-sm')); ?>
		<?php //echo $form->error($model,'password'); ?>

	</div>

	<div class="form-group">
            <button type="submit" class="btn btn-block btn-primary"><span class="glyphicon glyphicon-ok-circle"></span>
 Log Me In</button>
	</div>

<?php $this->endWidget(); ?>
