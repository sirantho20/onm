<?php
/* @var $this McMonthlyReportController */
/* @var $model McMonthlyReport */
/* @var $form TbActiveForm */
?>

<div>

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'mc-monthly-report-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
        'enableClientValidation'=>true,
	'enableAjaxValidation'=>false,
        'clientOptions'=>array(
            'validateOnType'=>true,
        )

)); ?>

        <div class="alert alert-info">
            <button type="submit" class="btn btn-success"><i class="icon-ok-circle icon-white"></i> Confirm & Save</button>
            <button type="reset" class="btn btn-warning"><i class="icon-repeat icon-white"></i> Clear Data</button>
            
        </div>
    <div class="well well-large">
            <?php echo $form->labelEx($model,'site_id', array('class'=>'control-label')); ?>
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
            <?php //echo $form->dropDownListControlGroup($model,'site_id',  SiteDetails::getSiteIDList(),array('span'=>5,'maxlength'=>50)); ?>
            <?php echo $form->dropDownListControlGroup($model,'checked_by',  AccountUsers::ListAccountUsers(),array('span'=>5,'maxlength'=>50,'required'=>'required', 'prompt'=>'choose option...')); ?>
            <?php echo $form->labelEx($model,'check_date', array('class'=>'control-label')); ?>
            <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'check_date',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
            <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
    
    </div>
    <!--###########    ############ -->

    <div class="tabbable"> <!-- Only required for left/right tabs -->
    <ul class="nav nav-tabs">
    <li class="active"><a href="#compound" data-toggle="tab">Compound Report</a></li>
    <li><a href="#container" data-toggle="tab">Container Report</a></li>
    <li><a href="#genset" data-toggle="tab">Genset Report</a></li>
    <li><a href="#power" data-toggle="tab">Power Readings</a></li>
    <li><a href="#misc" data-toggle="tab">Miscellaneous</a></li>
    </ul>
    <div class="tab-content">
    <div class="tab-pane active" id="compound">
        <p><?php $this->renderPartial('_compoundreport_form', array('model'=>$compound, 'form'=>$form)); ?></p>
    </div>
    <div class="tab-pane" id="container">
    <p><?php $this->renderPartial('_containerreport_form', array('model'=>$container, 'form'=>$form)); ?></p>
    </div>
    
    <div class="tab-pane" id="genset">
        <p><?php $this->renderPartial('_gensetreport_form', array('model'=>$genset, 'form'=>$form)); ?></p>
        </div>
        
    <div class="tab-pane" id="power">
        <p><?php $this->renderPartial('_powerreading_form', array('model'=>$power, 'form'=>$form)); ?></p>
        </div>
        
    <div class="tab-pane" id="misc">
        <p><?php $this->renderPartial('_misc_form', array('model'=>$misc, 'form'=>$form)); ?></p>
        </div>
        
    </div>
    </div>  

<div class="alert alert-info">
    <button type="submit" class="btn btn-success"><i class="icon-ok-circle icon-white"></i> Confirm & Save</button>
    <button type="reset" class="btn btn-warning"><i class="icon-repeat icon-white"></i> Clear Data</button>
</div>
    
    <?php $this->endWidget(); ?>

</div><!-- form -->