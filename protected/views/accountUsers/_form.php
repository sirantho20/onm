<?php
/* @var $this AccountUsersController */
/* @var $model AccountUsers */
/* @var $form TbActiveForm */
?>
  <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' =>'New Account User',
    'headerIcon' => 'icon-user',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'account-users-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>


        <div class="alert alert-info">
            <button type="submit" class="btn btn-success"><i class="icon-ok-circle icon-white"></i> Confirm & Save</button>
            <button type="reset" class="btn btn-warning"><i class="icon-repeat icon-white"></i> Clear Data</button>
            
        </div>
 <?php echo $form->errorSummary($model); ?>        
 <div class="row-fluid">
        <div class="span4">
            <?php echo $form->textFieldControlGroup($model,'first_name',array('span'=>12,'maxlength'=>50)); ?>
        </div>
        <div class="span4">
            <?php echo $form->textFieldControlGroup($model,'last_name',array('span'=>12,'maxlength'=>50)); ?>
        </div>
    </div>
    <div class="row-fluid">
            <?php echo $form->textFieldControlGroup($model,'username',array('span'=>5,'maxlength'=>50)); ?>
            <?php echo $form->passwordFieldControlGroup($model,'pword',array('span'=>5,'maxlength'=>500)); ?>
            <?php echo $form->dropDownListControlGroup($model,'role',  AccountUsers::getAccountRoles(), array('span'=>5,'maxlength'=>50, 'prompt'=>'choose option...')); ?>
            <?php echo $form->textFieldControlGroup($model,'email_address',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'mobile_number',array('span'=>5)); ?>

        
</div>
        
        <div class="alert alert-info">
            <button type="submit" class="btn btn-success"><i class="icon-ok-circle icon-white"></i> Confirm & Save</button>
            <button type="reset" class="btn btn-warning"><i class="icon-repeat icon-white"></i> Clear Data</button>
            
        </div>

    <?php $this->endWidget(); ?>
    </div>
   <?php $this->endWidget(); ?>       

