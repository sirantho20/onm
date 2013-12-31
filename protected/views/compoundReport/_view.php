<?php
/* @var $this CompoundReportController */
/* @var $data CompoundReport */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gate_and_lock_ok')); ?>:</b>
	<?php echo CHtml::encode($data->gate_and_lock_ok); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_neat_tidy')); ?>:</b>
	<?php echo CHtml::encode($data->site_neat_tidy); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weed_growing')); ?>:</b>
	<?php echo CHtml::encode($data->weed_growing); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fence_in_good_condition')); ?>:</b>
	<?php echo CHtml::encode($data->fence_in_good_condition); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gate_and_lock_ok_ACTION')); ?>:</b>
	<?php echo CHtml::encode($data->gate_and_lock_ok_ACTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gate_and_lock_ok_ACTION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->gate_and_lock_ok_ACTION_DATE); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('gate_and_lock_ok_FS_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->gate_and_lock_ok_FS_COMMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_neat_tidy_ACTION')); ?>:</b>
	<?php echo CHtml::encode($data->site_neat_tidy_ACTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_neat_tidy_ACTION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->site_neat_tidy_ACTION_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_neat_tidy_FS_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->site_neat_tidy_FS_COMMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weed_growing_ACTION')); ?>:</b>
	<?php echo CHtml::encode($data->weed_growing_ACTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weed_growing_ACTION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->weed_growing_ACTION_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weed_growing_FS_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->weed_growing_FS_COMMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fence_in_good_condition_ACTION')); ?>:</b>
	<?php echo CHtml::encode($data->fence_in_good_condition_ACTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fence_in_good_condition_ACTION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->fence_in_good_condition_ACTION_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fence_in_good_condition_FS_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->fence_in_good_condition_FS_COMMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retaining_walls_condition_cracks')); ?>:</b>
	<?php echo CHtml::encode($data->retaining_walls_condition_cracks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retaining_walls_condition_cracks_ACTION')); ?>:</b>
	<?php echo CHtml::encode($data->retaining_walls_condition_cracks_ACTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retaining_walls_condition_cracks_ACTION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->retaining_walls_condition_cracks_ACTION_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retaining_walls_condition_cracks_FS_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->retaining_walls_condition_cracks_FS_COMMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sign_of_flooding')); ?>:</b>
	<?php echo CHtml::encode($data->sign_of_flooding); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sign_of_flooding_ACTION')); ?>:</b>
	<?php echo CHtml::encode($data->sign_of_flooding_ACTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sign_of_flooding_ACTION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->sign_of_flooding_ACTION_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sign_of_flooding_FS_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->sign_of_flooding_FS_COMMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecg_meter_box_secured')); ?>:</b>
	<?php echo CHtml::encode($data->ecg_meter_box_secured); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecg_meter_box_secured_ACTION')); ?>:</b>
	<?php echo CHtml::encode($data->ecg_meter_box_secured_ACTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecg_meter_box_secured_ACTION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->ecg_meter_box_secured_ACTION_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecg_meter_box_secured_FS_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->ecg_meter_box_secured_FS_COMMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('security_guard_on_site')); ?>:</b>
	<?php echo CHtml::encode($data->security_guard_on_site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('security_guard_on_site_ACTION')); ?>:</b>
	<?php echo CHtml::encode($data->security_guard_on_site_ACTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('security_guard_on_site_ACTION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->security_guard_on_site_ACTION_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('security_guard_on_site_FS_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->security_guard_on_site_FS_COMMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('log_book_on_site')); ?>:</b>
	<?php echo CHtml::encode($data->log_book_on_site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('log_book_on_site_ACTION')); ?>:</b>
	<?php echo CHtml::encode($data->log_book_on_site_ACTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('log_book_on_site_ACTION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->log_book_on_site_ACTION_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('log_book_on_site_FS_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->log_book_on_site_FS_COMMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avr_on_site')); ?>:</b>
	<?php echo CHtml::encode($data->avr_on_site); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avr_on_site_ACTION')); ?>:</b>
	<?php echo CHtml::encode($data->avr_on_site_ACTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avr_on_site_ACTION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->avr_on_site_ACTION_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avr_on_site_FS_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->avr_on_site_FS_COMMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avr_operational')); ?>:</b>
	<?php echo CHtml::encode($data->avr_operational); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avr_operational_ACTION')); ?>:</b>
	<?php echo CHtml::encode($data->avr_operational_ACTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avr_operational_ACTION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->avr_operational_ACTION_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avr_operational_FS_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->avr_operational_FS_COMMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuel_spilage')); ?>:</b>
	<?php echo CHtml::encode($data->fuel_spilage); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuel_spilage_ACTION')); ?>:</b>
	<?php echo CHtml::encode($data->fuel_spilage_ACTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuel_spilage_ACTION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->fuel_spilage_ACTION_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuel_spilage_FS_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->fuel_spilage_FS_COMMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('installation_works_since_last_visit')); ?>:</b>
	<?php echo CHtml::encode($data->installation_works_since_last_visit); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('installation_works_since_last_visit_ACTION')); ?>:</b>
	<?php echo CHtml::encode($data->installation_works_since_last_visit_ACTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('installation_works_since_last_visit_ACTION_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->installation_works_since_last_visit_ACTION_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('installation_works_since_last_visit_FS_COMMENT')); ?>:</b>
	<?php echo CHtml::encode($data->installation_works_since_last_visit_FS_COMMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_id')); ?>:</b>
	<?php echo CHtml::encode($data->report_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gate_and_lock_ok_FS_COMMENT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->gate_and_lock_ok_FS_COMMENT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_neat_tidy_FS_COMMENT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->site_neat_tidy_FS_COMMENT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('weed_growing_FS_COMMENT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->weed_growing_FS_COMMENT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fence_in_good_condition_FS_COMMENT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->fence_in_good_condition_FS_COMMENT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('retaining_walls_condition_cracks_FS_COMMENT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->retaining_walls_condition_cracks_FS_COMMENT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sign_of_flooding_FS_COMMENT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->sign_of_flooding_FS_COMMENT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecg_meter_box_secured_FS_COMMENT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->ecg_meter_box_secured_FS_COMMENT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('security_guard_on_site_FS_COMMENT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->security_guard_on_site_FS_COMMENT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('log_book_on_site_FS_COMMENT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->log_book_on_site_FS_COMMENT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('avr_on_site_FS_COMMENT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->avr_on_site_FS_COMMENT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuel_spilage_FS_COMMENT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->fuel_spilage_FS_COMMENT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('installation_works_since_last_visit_FS_COMMENT_DATE')); ?>:</b>
	<?php echo CHtml::encode($data->installation_works_since_last_visit_FS_COMMENT_DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('stataus')); ?>:</b>
	<?php echo CHtml::encode($data->stataus); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('closed_date')); ?>:</b>
	<?php echo CHtml::encode($data->closed_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('closed_by')); ?>:</b>
	<?php echo CHtml::encode($data->closed_by); ?>
	<br />

	*/ ?>

</div>