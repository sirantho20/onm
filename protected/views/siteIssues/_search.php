<?php
/* @var $this SiteIssuesController */
/* @var $model SiteIssues */
/* @var $form CActiveForm */
?>

<div class="wide form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

                    <?php echo $form->textFieldControlGroup($model,'id',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'report_id',array('span'=>5)); ?>

                    <?php echo $form->textAreaControlGroup($model,'issue_description',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textAreaControlGroup($model,'issue_action',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'issue_action_date',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'issue_date',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'raised_by',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textAreaControlGroup($model,'fs_comment',array('rows'=>6,'span'=>8)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fs_comment_date',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'resolution_date',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fs_confirm_resolution',array('span'=>5,'maxlength'=>1)); ?>

                    <?php echo $form->textFieldControlGroup($model,'fs_confirm_date',array('span'=>5)); ?>

                    <?php echo $form->textFieldControlGroup($model,'site_id',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'site_name',array('span'=>5,'maxlength'=>50)); ?>

                    <?php echo $form->textFieldControlGroup($model,'issue_type',array('span'=>5,'maxlength'=>50)); ?>

        <div class="form-actions">
        <?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- search-form -->