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

    <?php echo $form->errorSummary($model); ?>

            <?php echo $form->dropDownListControlGroup($model,'account_id',  ContractorAccounts::getContractorAccounts(),array('span'=>5)); ?>

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
            <?php echo $form->dropDownListControlGroup($model,'role',  AccountUsers::getAccountRoles(), array('span'=>5,'maxlength'=>50)); ?>
            <?php echo $form->textFieldControlGroup($model,'email_address',array('span'=>5,'maxlength'=>50)); ?>

            <?php echo $form->textFieldControlGroup($model,'mobile_number',array('span'=>5)); ?>

        
</div>
        
        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>
    </div>
   <?php $this->endWidget(); ?>       

