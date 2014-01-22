            
    <?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' =>'Door Locking Inspection',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'door_locking_working',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>

            <?php echo $form->textAreaControlGroup($model,'door_locking_working_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'door_locking_working_ACTION_DATE', array('class'=>'control-label')); ?>
        <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                    'model' => $model,
                    'attribute' => 'door_locking_working_ACTION_DATE',
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
    'title' =>'External Security Lights',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'external_security_light_working',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'external_security_light_working_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'external_security_light_working_ACTION_DATE', array('class'=>'control-label')); ?>
        <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                    'model' => $model,
                    'attribute' => 'external_security_light_working_ACTION_DATE',
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
    'title' =>'Internal Lights/Wall Sockets',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'internal_lights_wall_sockets_working',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'internal_lights_wall_sockets_working_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'internal_lights_wall_sockets_working_ACTION_DATE', array('class'=>'control-label')); ?>
        <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                    'model' => $model,
                    'attribute' => 'internal_lights_wall_sockets_working_ACTION_DATE',
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
    'title' =>'Fire Extinquisher',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'fire_extinguisher_on_site',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'fire_extinguisher_on_site_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'fire_extinguisher_on_site_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
            <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                    'model' => $model,
                    'attribute' => 'fire_extinguisher_on_site_ACTION_DATE',
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
    'title' =>'Container Cleanliness',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'inside_container_neat_tidy',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'inside_container_neat_tidy_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'inside_container_neat_tidy_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model' => $model,
                        'attribute' => 'inside_container_neat_tidy_ACTION_DATE',
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
    'title' =>'Water Entering Container',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'water_insect_intering_container',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'water_insect_intering_container_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'water_insect_intering_container_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model' => $model,
                        'attribute' => 'water_insect_intering_container_ACTION_DATE',
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
    'title' =>'Site Log Books Availability',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'site_log_book_in_container',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'site_log_book_in_container_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'site_log_book_in_container_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model' => $model,
                        'attribute' => 'site_log_book_in_container_ACTION_DATE',
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
    'title' =>'AC Units Functionality',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'ac_units_working_correctly',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'ac_units_working_correctly_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'ac_units_working_correctly_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model' => $model,
                        'attribute' => 'ac_units_working_correctly_ACTION_DATE',
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
    'title' =>'AC Servicing',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'ac_serviced',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'ac_serviced_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'ac_serviced_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model' => $model,
                        'attribute' => 'ac_serviced_ACTION_DATE',
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
    'title' =>'AC Air Filter',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">
            <?php echo $form->dropDownListControlGroup($model,'ac_air_filter_clean',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'ac_air_filter_clean_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'ac_air_filter_clean_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model' => $model,
                        'attribute' => 'ac_air_filter_clean_ACTION_DATE',
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
    'title' =>'BTS Alarms',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">    
            <?php echo $form->dropDownListControlGroup($model,'bts_internal_external_alarms',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'bts_internal_external_alarms_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'bts_internal_external_alarms_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model' => $model,
                        'attribute' => 'bts_internal_external_alarms_ACTION_DATE',
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
    'title' =>'BTS Colling Fans',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">        
            <?php echo $form->dropDownListControlGroup($model,'bts_cooling_fans_working',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'bts_cooling_fans_working_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'bts_cooling_fans_working_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model' => $model,
                        'attribute' => 'bts_cooling_fans_working_ACTION_DATE',
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
    'title' =>'Rectifier Alarms',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">            
            <?php echo $form->dropDownListControlGroup($model,'rectifier_alarms',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'rectifier_alarms_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'rectifier_alarms_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model' => $model,
                        'attribute' => 'rectifier_alarms_ACTION_DATE',
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
    'title' =>'Batteries Check',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">                
            <?php echo $form->dropDownListControlGroup($model,'batteries_ok',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'batteries_ok_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'batteries_ok_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model' => $model,
                        'attribute' => 'batteries_ok_ACTION_DATE',
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
    'title' =>'Breaker Trip',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">         
            <?php echo $form->dropDownListControlGroup($model,'breaker_tripped_in_mains_db_box',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'breaker_tripped_in_mains_db_box_ACTION',array('rows'=>6,'span'=>8)); ?>
            <?php echo $form->labelEx($model,'breaker_tripped_in_mains_db_box_ACTION_DATE', array('class'=>'control-label')); ?>
            <div class="input-append">
                <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                        'model' => $model,
                        'attribute' => 'breaker_tripped_in_mains_db_box_ACTION_DATE',
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
    'title' =>'Installation Works',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table'),
    'htmlHeaderOptions'=>array('class'=>''),
    ));?>
    <div class="box-lining">             
            <?php echo $form->dropDownListControlGroup($model,'installation_works_since_last_visit',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
            <?php echo $form->textAreaControlGroup($model,'installation_works_since_last_visit_FS_COMMENT',array('rows'=>6,'span'=>8)); ?>
    </div>
   <?php $this->endWidget(); ?>          
