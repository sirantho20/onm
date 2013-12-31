<?php
/* @var $this CompoundReportController */
/* @var $model CompoundReport */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'gate_and_lock_ok',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textFieldControlGroup($model,'site_neat_tidy',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textFieldControlGroup($model,'weed_growing',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fence_in_good_condition',array('span'=>5,'maxlength'=>10)); ?>

                    <?php echo $form->textAreaControlGroup($model,'gate_and_lock_ok_ACTION',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'gate_and_lock_ok_ACTION_DATE',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'gate_and_lock_ok_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textAreaControlGroup($model,'site_neat_tidy_ACTION',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'site_neat_tidy_ACTION_DATE',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'site_neat_tidy_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textAreaControlGroup($model,'weed_growing_ACTION',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'weed_growing_ACTION_DATE',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'weed_growing_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textAreaControlGroup($model,'fence_in_good_condition_ACTION',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fence_in_good_condition_ACTION_DATE',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'fence_in_good_condition_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'retaining_walls_condition_cracks',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textAreaControlGroup($model,'retaining_walls_condition_cracks_ACTION',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'retaining_walls_condition_cracks_ACTION_DATE',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'retaining_walls_condition_cracks_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'sign_of_flooding',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textAreaControlGroup($model,'sign_of_flooding_ACTION',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'sign_of_flooding_ACTION_DATE',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'sign_of_flooding_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'ecg_meter_box_secured',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textAreaControlGroup($model,'ecg_meter_box_secured_ACTION',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'ecg_meter_box_secured_ACTION_DATE',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'ecg_meter_box_secured_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'security_guard_on_site',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textAreaControlGroup($model,'security_guard_on_site_ACTION',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'security_guard_on_site_ACTION_DATE',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'security_guard_on_site_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'log_book_on_site',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textAreaControlGroup($model,'log_book_on_site_ACTION',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'log_book_on_site_ACTION_DATE',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'log_book_on_site_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'avr_on_site',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textAreaControlGroup($model,'avr_on_site_ACTION',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'avr_on_site_ACTION_DATE',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'avr_on_site_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'avr_operational',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textAreaControlGroup($model,'avr_operational_ACTION',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'avr_operational_ACTION_DATE',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'avr_operational_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fuel_spilage',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textAreaControlGroup($model,'fuel_spilage_ACTION',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fuel_spilage_ACTION_DATE',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'fuel_spilage_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'installation_works_since_last_visit',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textAreaControlGroup($model,'installation_works_since_last_visit_ACTION',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'installation_works_since_last_visit_ACTION_DATE',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'installation_works_since_last_visit_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'report_id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'gate_and_lock_ok_FS_COMMENT_DATE',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'site_neat_tidy_FS_COMMENT_DATE',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'weed_growing_FS_COMMENT_DATE',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fence_in_good_condition_FS_COMMENT_DATE',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'retaining_walls_condition_cracks_FS_COMMENT_DATE',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'sign_of_flooding_FS_COMMENT_DATE',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'ecg_meter_box_secured_FS_COMMENT_DATE',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'security_guard_on_site_FS_COMMENT_DATE',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'log_book_on_site_FS_COMMENT_DATE',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'avr_on_site_FS_COMMENT_DATE',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fuel_spilage_FS_COMMENT_DATE',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'installation_works_since_last_visit_FS_COMMENT_DATE',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'stataus',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'closed_date',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'closed_by',array('span'=>5,'maxlength'=>50)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->