<?php
/* @var $this TimespanController */
/* @var $data Timespan */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timespan_in')); ?>:</b>
	<?php echo CHtml::encode($data->timespan_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timespan_out')); ?>:</b>
	<?php echo CHtml::encode($data->timespan_out); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timespan_time')); ?>:</b>
	<?php echo CHtml::encode(($data->timespan_time)/3600 .':' . ($data->timespan_time)%3600); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_id')); ?>:</b>
	<?php echo CHtml::encode($data->user_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_id')); ?>:</b>
	<?php echo CHtml::encode($data->project_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task_id')); ?>:</b>
	<?php echo CHtml::encode($data->task_id); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('timespan_comment')); ?>:</b>
	<?php echo CHtml::encode($data->timespan_comment); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timespan_comment_type')); ?>:</b>
	<?php echo CHtml::encode($data->timespan_comment_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timespan_cleared')); ?>:</b>
	<?php echo CHtml::encode($data->timespan_cleared); ?>
	<br />

	*/ ?>

</div>