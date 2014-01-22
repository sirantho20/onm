
    
<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Genset Canopy',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'genset_canopy_clean_tidy',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'genset_canopy_clean_tidy_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'genset_canopy_clean_tidy_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'genset_canopy_clean_tidy_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
   </div>
   <?php $this->endWidget(); ?>        

<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Genset Canopy',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'padlocks_on_all_doors',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'padlocks_on_all_doors_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'padlocks_on_all_doors_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'padlocks_on_all_doors_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
</div>
<?php $this->endWidget(); ?> 

<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Genset Canopy',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">    
            <?php echo $form->dropDownListControlGroup($model,'ats_panel_alarms',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'ats_panel_alarms_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->textFieldControlGroup($model,'ats_panel_alarms_ACTION_DATE',array('span'=>5)); ?>       
            <?php echo $form->labelEx($model,'ats_panel_alarms_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'ats_panel_alarms_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
</div>
<?php $this->endWidget(); ?> 

<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Genset Noise Level',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">        
    <?php echo $form->textFieldControlGroup($model,'noice_level',array('span'=>5,'maxlength'=>50)); ?>    
</div>
<?php $this->endWidget(); ?> 
    
<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Genset Servicing',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'genset_serviced',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->labelEx($model,'genset_serviced_date', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'genset_serviced_date',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
            <?php echo $form->dropDownListControlGroup($model,'genset_service_tag_with_previous_data',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            
            <?php echo $form->labelEx($model,'next_service_date', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'next_service_date',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
        
            <?php echo $form->textAreaControlGroup($model,'genset_serviced_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'genset_serviced_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'genset_serviced_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>
        
</div>
<?php $this->endWidget(); ?>         

<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Fuel and Water Levels',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">    
            <?php echo $form->dropDownListControlGroup($model,'water_fuel_level_ok',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'water_fuel_level_ok_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->textFieldControlGroup($model,'fuel_level',array('span'=>5,'maxlength'=>18)); ?>
            <?php echo $form->labelEx($model,'water_fuel_level_ok_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'water_fuel_level_ok_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>        
</div>
<?php $this->endWidget(); ?> 
    
<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Genset Automation',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">            
            <?php echo $form->dropDownListControlGroup($model,'double_genset_automation_working',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'double_genset_automation_working_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'double_genset_automation_working_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'double_genset_automation_working_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>         
</div>
<?php $this->endWidget(); ?> 
    
<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Auto Start Test',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">                
            <?php echo $form->dropDownListControlGroup($model,'test_auto_start_by_switching_off_mains',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'test_auto_start_by_switching_off_mains_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->textFieldControlGroup($model,'kva_running_load',array('span'=>5,'maxlength'=>18)); ?>
            <?php echo $form->labelEx($model,'test_auto_start_by_switching_off_mains_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'test_auto_start_by_switching_off_mains_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>        
</div>
<?php $this->endWidget(); ?> 
    
<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Exhaust System Check',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">          
            <?php echo $form->dropDownListControlGroup($model,'exhaust_system_broken_noisy_lagging',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'exhaust_system_broken_noisy_lagging_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'exhaust_system_broken_noisy_lagging_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'exhaust_system_broken_noisy_lagging_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>        
</div>
<?php $this->endWidget(); ?> 
    
<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Engine Cranking/Battery Cables',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">                  
            <?php echo $form->dropDownListControlGroup($model,'check_engine_cranking_battery_water_cables',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'check_engine_cranking_battery_water_cables_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'check_engine_cranking_battery_water_cables_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'check_engine_cranking_battery_water_cables_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>         
</div>
<?php $this->endWidget(); ?> 
    
<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' => 'Fuel Theft/Leakage',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">                  
            <?php echo $form->dropDownListControlGroup($model,'fuel_theft_leakage',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'fuel_theft_leakage_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'fuel_theft_leakage_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model'=>$model,
                        'attribute' => 'fuel_theft_leakage_ACTION_DATE',
                        'pluginOptions' => array(
                            'format' => 'yyyy-mm-dd'
                        )
                    ));
                ?>
                <span class="add-on"><icon class="icon-calendar"></icon></span>
            </div>         
        
</div>
<?php $this->endWidget(); ?>     