<?php
/* @var $this ProjectController */
/* @var $data Project */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_name')); ?>:</b>
	<?php echo CHtml::encode($data->project_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_description')); ?>:</b>
	<?php echo CHtml::encode($data->project_description); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_visible')); ?>:</b>
	<?php echo CHtml::encode($data->project_visible); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_filter')); ?>:</b>
	<?php echo CHtml::encode($data->project_filter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_trash')); ?>:</b>
	<?php echo CHtml::encode($data->project_trash); ?>
	<br />


</div>