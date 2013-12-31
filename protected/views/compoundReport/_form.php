<div class="form">

    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'id'=>'compound-report-form',
        //'layout'=>  TbHtml::FORM_LAYOUT_HORIZONTAL,
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>
    
    
    
   <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' =>'Gate and Locks Inspection',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
        <?php echo $form->dropDownListControlGroup($model,'gate_and_lock_ok',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
        <?php echo $form->textAreaControlGroup($model,'gate_and_lock_ok_ACTION',array('rows'=>6,'span'=>8)); ?>
        
        <div class="control-group">
            <?php echo $form->labelEx($model,'gate_and_lock_ok_ACTION_DATE', array('class'=>'control-label')); ?>
        <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                    'name' => 'gate_and_lock_ok_ACTION_DATE',
                    'pluginOptions' => array(
                        'format' => 'mm/dd/yyyy'
                    )
                ));
            ?>
            <span class="add-on"><icon class="icon-calendar"></icon></span>
        </div>
        </div>
        
   </div>
   <?php $this->endWidget(); ?>
    
<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' =>'Site Cleanliness',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
        <?php echo $form->dropDownListControlGroup($model,'site_neat_tidy',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
        <?php echo $form->textAreaControlGroup($model,'site_neat_tidy_ACTION',array('rows'=>6,'span'=>8)); ?>
        <div class="control-group">
            <?php echo $form->labelEx($model,'site_neat_tidy_ACTION_DATE', array('class'=>'control-label')); ?>
        <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                    'name' => 'site_neat_tidy_ACTION_DATE',
                    'pluginOptions' => array(
                        'format' => 'mm/dd/yyyy'
                    )
                ));
            ?>
            <span class="add-on"><icon class="icon-calendar"></icon></span>
        </div>
        </div>
   </div>
   <?php $this->endWidget(); ?>
            
<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' =>'Weeds Growth',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
        <?php echo $form->dropDownListControlGroup($model,'weed_growing',array('y'=>'Yes','n'=>'No'),array('required'=>true,'prompt'=>'choose option..')); ?>
        <?php echo $form->textAreaControlGroup($model,'weed_growing_ACTION',array('rows'=>6,'span'=>8)); ?>
        <div class="control-group">
            <?php echo $form->labelEx($model,'weed_growing_ACTION_DATE', array('class'=>'control-label')); ?>
        <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                    'name' => 'weed_growing_ACTION_DATE',
                    'pluginOptions' => array(
                        'format' => 'mm/dd/yyyy'
                    )
                ));
            ?>
            <span class="add-on"><icon class="icon-calendar"></icon></span>
        </div>
        </div>
   </div>
   <?php $this->endWidget(); ?>
            
    <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Fencing Condition',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
        <?php echo $form->dropDownListControlGroup($model,'fence_in_good_condition',array('y'=>'Yes','n'=>'No'),array('required'=>true,'prompt'=>'choose option..')); ?>
        <?php echo $form->textAreaControlGroup($model,'fence_in_good_condition_ACTION',array('rows'=>6,'span'=>8)); ?>
        <div class="control-group">
            <?php echo $form->labelEx($model,'fence_in_good_condition_ACTION_DATE', array('class'=>'control-label')); ?>
        <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                    'name' => 'fence_in_good_condition_ACTION_DATE',
                    'pluginOptions' => array(
                        'format' => 'mm/dd/yyyy'
                    )
                ));
            ?>
            <span class="add-on"><icon class="icon-calendar"></icon></span>
        </div>
        </div>
   </div>
   <?php $this->endWidget(); ?>
            
    <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Retaining Walls',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
        <?php echo $form->dropDownListControlGroup($model,'retaining_walls_condition_cracks',array('y'=>'Yes','n'=>'No'),array('required'=>true,'prompt'=>'choose option..')); ?>
        <?php echo $form->textAreaControlGroup($model,'retaining_walls_condition_cracks_ACTION',array('rows'=>6,'span'=>8)); ?>
        <div class="control-group">
            <?php echo $form->labelEx($model,'retaining_walls_condition_cracks_ACTION_DATE', array('class'=>'control-label')); ?>
        <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                    'name' => 'retaining_walls_condition_cracks_ACTION_DATE',
                    'pluginOptions' => array(
                        'format' => 'mm/dd/yyyy'
                    )
                ));
            ?>
            <span class="add-on"><icon class="icon-calendar"></icon></span>
        </div>
        </div>
   </div>
   <?php $this->endWidget(); ?>
            
    <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Flooding',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
        <?php echo $form->dropDownListControlGroup($model,'sign_of_flooding',array('y'=>'Yes','n'=>'No'),array('required'=>true,'prompt'=>'choose option..')); ?>
        <?php echo $form->textAreaControlGroup($model,'sign_of_flooding_ACTION',array('rows'=>6,'span'=>8)); ?>
        <div class="control-group">
            <?php echo $form->labelEx($model,'sign_of_flooding_ACTION_DATE', array('class'=>'control-label')); ?>
        <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                    'name' => 'sign_of_flooding_ACTION_DATE',
                    'pluginOptions' => array(
                        'format' => 'mm/dd/yyyy'
                    )
                ));
            ?>
            <span class="add-on"><icon class="icon-calendar"></icon></span>
        </div>
        </div>
   </div>
   <?php $this->endWidget(); ?>
            
    <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'ECG Meter Box',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
        <legend>ECG Meter Box</legend>
         <?php echo $form->dropDownListControlGroup($model,'ecg_meter_box_secured',array('y'=>'Yes','n'=>'No'),array('required'=>true,'prompt'=>'choose option..')); ?>
         <?php echo $form->textAreaControlGroup($model,'ecg_meter_box_secured_ACTION',array('rows'=>6,'span'=>8)); ?>
         <div class="control-group">
            <?php echo $form->labelEx($model,'ecg_meter_box_secured_ACTION_DATE', array('class'=>'control-label')); ?>
        <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                    'name' => 'ecg_meter_box_secured_ACTION_DATE',
                    'pluginOptions' => array(
                        'format' => 'mm/dd/yyyy'
                    ),
                ));
            ?>
            <span class="add-on"><icon class="icon-calendar"></icon></span>
        </div>
        </div>
  </div>
   <?php $this->endWidget(); ?>

    <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' =>'Security Gourd Availability',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
        <?php echo $form->dropDownListControlGroup($model,'security_guard_on_site',array('y'=>'Yes','n'=>'No'),array('required'=>true,'prompt'=>'choose option..')); ?>
        <?php echo $form->textAreaControlGroup($model,'security_guard_on_site_ACTION',array('rows'=>6,'span'=>8)); ?>
        <div class="control-group">
            <?php echo $form->labelEx($model,'security_guard_on_site_ACTION_DATE', array('class'=>'control-label')); ?>
        <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                    'name' => 'security_guard_on_site_ACTION_DATE',
                    'pluginOptions' => array(
                        'format' => 'mm/dd/yyyy'
                    ),
                ));
            ?>
            <span class="add-on"><icon class="icon-calendar"></icon></span>
        </div>
        </div>
   </div>
   <?php $this->endWidget(); ?>

    <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Site Log Book',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'log_book_on_site',array('y'=>'Yes','n'=>'No'),array('required'=>true,'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'log_book_on_site_ACTION',array('rows'=>6,'span'=>8)); ?>
            <div class="control-group">
                <?php echo $form->labelEx($model,'log_book_on_site_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'name' => 'log_book_on_site_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'mm/dd/yyyy'
                        ),
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
            </div>
   </div>
   <?php $this->endWidget(); ?>

    <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'AVR Availability',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'avr_on_site',array('y'=>'Yes','n'=>'No'),array('required'=>true,'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'avr_on_site_ACTION',array('rows'=>6,'span'=>8)); ?>
            <div class="control-group">
                <?php echo $form->labelEx($model,'avr_on_site_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'name' => 'avr_on_site_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'mm/dd/yyyy'
                        ),
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
            </div>
    </div>
    <?php $this->endWidget(); ?>

    <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'AVR Functionality',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'avr_operational',array('y'=>'Yes','n'=>'No'),array('required'=>true,'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'avr_operational_ACTION',array('rows'=>6,'span'=>8)); ?>
            <div class="control-group">
                <?php echo $form->labelEx($model,'avr_operational_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'name' => 'avr_operational_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'mm/dd/yyyy'
                        ),
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
            </div>
     </div>
     <?php $this->endWidget(); ?>
    
    <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Fuel Spillage',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'fuel_spilage',array('y'=>'Yes','n'=>'No'),array('required'=>true,'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'fuel_spilage_ACTION',array('rows'=>6,'span'=>8)); ?>
            <div class="control-group">
                <?php echo $form->labelEx($model,'fuel_spilage_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'name' => 'fuel_spilage_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'mm/dd/yyyy'
                        ),
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
            </div>
    </div>
    <?php $this->endWidget(); ?>
    
    <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Installation Works',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'installation_works_since_last_visit',array('y'=>'Yes','n'=>'No'),array('required'=>true,'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'installation_works_since_last_visit_ACTION',array('rows'=>6,'span'=>8)); ?>
            <div class="control-group">
                <?php echo $form->labelEx($model,'installation_works_since_last_visit_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'name' => 'installation_works_since_last_visit_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'mm/dd/yyyy'
                        ),
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
            </div>
    </div>
    <?php $this->endWidget(); ?>


    <?php $this->endWidget(); ?>

</div><!-- form -->