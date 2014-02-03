<?php
/* @var $this SiteIssuesController */
/* @var $model SiteIssues */
/* @var $form TbActiveForm */
?>
<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
'title' => 'New Sit Issue',
'headerIcon' => 'icon-th-list',
// when displaying a table, if we include bootstra-widget-table class
// the table will be 0-padding to the box
'htmlOptions' => array('class'=>'bootstrap-widget-table')
));?>
<div class="box-lining">
<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'site-issues-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>true,
)); ?>

    <?php echo $form->errorSummary($model); ?>
             <?php
                $this->widget('yiiwheels.widgets.formhelpers.WhSelectBox',
                array(
                        'htmlOptions'=>array('class'=>'span5','placeholder'=>'Select Site ID'),
                        'model'=>$model,
                        'attribute'=>'site_id',
                        'data' => SiteDetails::getSiteIDList(),
                     )
                );
            ?>    
            <?php //echo $form->textFieldControlGroup($model,'issue_date',array('span'=>5)); ?>
            <?php echo $form->labelEx($model,'issue_date', array('class'=>'control-label')); ?>
            <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'issue_date',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
            <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
            <?php echo $form->textAreaControlGroup($model,'issue_description',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->textAreaControlGroup($model,'issue_action',array('rows'=>6,'span'=>8, 'required'=>'required')); ?>
            <?php //echo $form->textFieldControlGroup($model,'issue_action_date',array('span'=>5)); ?>
            <?php echo $form->labelEx($model,'issue_action_date', array('class'=>'control-label')); ?>
            <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'issue_action_date',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
            <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
    
        <div class="form-actions">
        <?php echo TbHtml::submitButton($model->isNewRecord ? 'Create' : 'Save',array(
		    'color'=>TbHtml::BUTTON_COLOR_PRIMARY,
		    'size'=>TbHtml::BUTTON_SIZE_LARGE,
		)); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->
   </div>
   <?php $this->endWidget(); ?>