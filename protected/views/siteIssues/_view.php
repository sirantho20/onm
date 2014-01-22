<?php
/* @var $this SiteIssuesController */
/* @var $data SiteIssues */
?>

<div class="view">

    	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('report_id')); ?>:</b>
	<?php echo CHtml::encode($data->report_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issue_description')); ?>:</b>
	<?php echo CHtml::encode($data->issue_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issue_action')); ?>:</b>
	<?php echo CHtml::encode($data->issue_action); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issue_action_date')); ?>:</b>
	<?php echo CHtml::encode($data->issue_action_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issue_date')); ?>:</b>
	<?php echo CHtml::encode($data->issue_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('raised_by')); ?>:</b>
	<?php echo CHtml::encode($data->raised_by); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fs_comment')); ?>:</b>
	<?php echo CHtml::encode($data->fs_comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fs_comment_date')); ?>:</b>
	<?php echo CHtml::encode($data->fs_comment_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('resolution_date')); ?>:</b>
	<?php echo CHtml::encode($data->resolution_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fs_confirm_resolution')); ?>:</b>
	<?php echo CHtml::encode($data->fs_confirm_resolution); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fs_confirm_date')); ?>:</b>
	<?php echo CHtml::encode($data->fs_confirm_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_id')); ?>:</b>
	<?php echo CHtml::encode($data->site_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_name')); ?>:</b>
	<?php echo CHtml::encode($data->site_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('issue_type')); ?>:</b>
	<?php echo CHtml::encode($data->issue_type); ?>
	<br />

	*/ ?>

</div>