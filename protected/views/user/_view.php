<?php
/* @var $this UserController */
/* @var $data User */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('username')); ?>:</b>
	<?php echo CHtml::encode($data->username); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_alias')); ?>:</b>
	<?php echo CHtml::encode($data->user_alias); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_sts')); ?>:</b>
	<?php echo CHtml::encode($data->user_sts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_trash')); ?>:</b>
	<?php echo CHtml::encode($data->user_trash); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_active')); ?>:</b>
	<?php echo CHtml::encode($data->user_active); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('user_email')); ?>:</b>
	<?php echo CHtml::encode($data->user_email); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ban')); ?>:</b>
	<?php echo CHtml::encode($data->ban); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('banTime')); ?>:</b>
	<?php echo CHtml::encode($data->banTime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('secure')); ?>:</b>
	<?php echo CHtml::encode($data->secure); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastProject')); ?>:</b>
	<?php echo CHtml::encode($data->lastProject); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastTask')); ?>:</b>
	<?php echo CHtml::encode($data->lastTask); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lastRecord')); ?>:</b>
	<?php echo CHtml::encode($data->lastRecord); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timespace_in')); ?>:</b>
	<?php echo CHtml::encode($data->timespace_in); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('timespace_out')); ?>:</b>
	<?php echo CHtml::encode($data->timespace_out); ?>
	<br />

	*/ ?>

</div>