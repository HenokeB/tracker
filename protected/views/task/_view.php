<?php
/* @var $this TaskController */
/* @var $data Task */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task_name')); ?>:</b>
	<?php echo CHtml::encode($data->task_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task_description')); ?>:</b>
	<?php echo CHtml::encode($data->task_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task_visible')); ?>:</b>
	<?php echo CHtml::encode($data->task_visible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task_filter')); ?>:</b>
	<?php echo CHtml::encode($data->task_filter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('task_trash')); ?>:</b>
	<?php echo CHtml::encode($data->task_trash); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_id')); ?>:</b>
	<?php echo CHtml::encode($data->project_id); ?>
	<br />


</div>