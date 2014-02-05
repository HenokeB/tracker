<?php
/* @var $this GroupController */
/* @var $data Group */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_name')); ?>:</b>
	<?php echo CHtml::encode($data->group_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('group_trash')); ?>:</b>
	<?php echo CHtml::encode($data->group_trash); ?>
	<br />


</div>