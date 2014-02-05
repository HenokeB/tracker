<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'username'); ?>
		<?php echo $form->textField($model,'username',array('size'=>60,'maxlength'=>130)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_alias'); ?>
		<?php echo $form->textField($model,'user_alias',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_sts'); ?>
		<?php echo $form->textField($model,'user_sts'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_trash'); ?>
		<?php echo $form->textField($model,'user_trash'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_active'); ?>
		<?php echo $form->textField($model,'user_active'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_email'); ?>
		<?php echo $form->textField($model,'user_email',array('size'=>60,'maxlength'=>160)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ban'); ?>
		<?php echo $form->textField($model,'ban'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'banTime'); ?>
		<?php echo $form->textField($model,'banTime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'secure'); ?>
		<?php echo $form->textField($model,'secure',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastProject'); ?>
		<?php echo $form->textField($model,'lastProject'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastTask'); ?>
		<?php echo $form->textField($model,'lastTask'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lastRecord'); ?>
		<?php echo $form->textField($model,'lastRecord'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timespace_in'); ?>
		<?php echo $form->textField($model,'timespace_in',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timespace_out'); ?>
		<?php echo $form->textField($model,'timespace_out',array('size'=>60,'maxlength'=>60)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->