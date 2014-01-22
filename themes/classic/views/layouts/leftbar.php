<?php $this->beginContent('//layouts/main'); ?>
<div style="margin-top: 45px;" class="container-fluid">
        <div class="row-fluid">
        <div class="span3">
            

    <?php $this->widget('bootstrap.widgets.TbNav', array(
    'type' => TbHtml::NAV_TYPE_TABS,
    'stacked' => true,
    'htmlOptions'=>array('class'=>'sticky'),
     'items' =>
     array_merge(array(
         '<li class="active alert alert-info" style="border-radius:5px 5px 0px 0px; border-top-color:lightgray; border-left-color:lightgray; border-right-color:lightgray;"><center><b>Actions Menu</b></center></li>',
                
     ),$this->menu)
        )); ?>
            
            
        </div>
        
        <div class="span9">
            <?php echo $content; ?>
        </div>
        </div>
    </div>

<?php $this->endContent(); ?>