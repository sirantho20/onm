
<?php $box = $this->beginWidget('yiiwheels.widgets.box.WhBox', array(
    'title' =>'Access Road',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">
    <?php echo $form->dropDownListControlGroup($model,'access_road_good_condition',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
    <?php echo $form->textAreaControlGroup($model,'access_road_good_condition_ACTION',array('rows'=>6,'span'=>8)); ?>
    <?php echo $form->labelEx($model,'access_road_good_condition_ACTION_DATE', array('class'=>'control-label')); ?>
    <div class="input-append">
        <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                'model'=>$model,
                'attribute' => 'access_road_good_condition_ACTION_DATE',
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
    'title' =>'Transformer Leakage',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">    
    <?php echo $form->dropDownListControlGroup($model,'transformer_leakage',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
    <?php echo $form->textAreaControlGroup($model,'transformer_leakage_ACTION',array('rows'=>6,'span'=>8)); ?>
    <?php echo $form->labelEx($model,'transformer_leakage_ACTION_DATE', array('class'=>'control-label')); ?>
    <div class="input-append">
    <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                'model'=>$model,
                'attribute' => 'transformer_leakage_ACTION_DATE',
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
    'title' =>'Dumping of Oil/Used parts',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">    
    <?php echo $form->dropDownListControlGroup($model,'used_part_oil_dump',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
    <?php echo $form->textAreaControlGroup($model,'used_part_oil_dump_ACTION',array('rows'=>6,'span'=>8)); ?>
    <?php echo $form->labelEx($model,'used_part_oil_dump_ACTION_DATE', array('class'=>'control-label')); ?>
    <div class="input-append">
    <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                'model'=>$model,
                'attribute' => 'used_part_oil_dump_ACTION_DATE',
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
    'title' =>'Visible Celtel Billboard',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">        
    <?php echo $form->dropDownListControlGroup($model,'visible_celtel_billboard',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
    <?php echo $form->textAreaControlGroup($model,'visible_celtel_billboard_ACTION',array('rows'=>6,'span'=>8)); ?>
    <?php echo $form->labelEx($model,'visible_celtel_billboard_ACTION_DATE', array('class'=>'control-label')); ?>
    <div class="input-append">
    <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                'model'=>$model,
                'attribute' => 'visible_celtel_billboard_ACTION_DATE',
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
    'title' =>'ECG Mains',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">           
    <?php echo $form->dropDownListControlGroup($model,'ecg_mains_near_site',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
    <?php echo $form->textAreaControlGroup($model,'ecg_mains_near_site_ACTION',array('rows'=>6,'span'=>8)); ?>
    <?php echo $form->labelEx($model,'ecg_mains_near_site_ACTION_DATE', array('class'=>'control-label')); ?>
    <div class="input-append">
    <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                'model'=>$model,
                'attribute' => 'ecg_mains_near_site_ACTION_DATE',
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
    'title' =>'Sign of Fuel on Site',
    'headerIcon' => 'icon-th-list',
    // when displaying a table, if we include bootstra-widget-table class
    // the table will be 0-padding to the box
    'htmlOptions' => array('class'=>'bootstrap-widget-table')
    ));?>
    <div class="box-lining">        
    <?php echo $form->dropDownListControlGroup($model,'signs_of_fuel_on_site',array('y'=>'Yes','n'=>'No'), array('required'=>true, 'prompt'=>'choose option..')); ?>
    <?php echo $form->textAreaControlGroup($model,'signs_of_fuel_on_site_ACTION',array('rows'=>6,'span'=>8)); ?>
    <?php echo $form->labelEx($model,'signs_of_fuel_on_site_ACTION_DATE', array('class'=>'control-label')); ?>
    <div class="input-append">
    <?php $this->widget('yiiwheels.widgets.datepicker.WhDatePicker', array(
                'model'=>$model,
                'attribute' => 'signs_of_fuel_on_site_ACTION_DATE',
                'pluginOptions' => array(
                    'format' => 'yyyy-mm-dd'
                )
            ));
        ?>
    <span class="add-on"><icon class="icon-calendar"></icon></span>
    </div>
</div>
<?php $this->endWidget(); ?> 
