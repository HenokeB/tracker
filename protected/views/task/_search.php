<?php
/* @var $this TaskController */
/* @var $model Task */
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
		<?php echo $form->label($model,'task_name'); ?>
		<?php echo $form->textField($model,'task_name',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'task_description'); ?>
		<?php echo $form->textArea($model,'task_description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'task_visible'); ?>
		<?php echo $form->textField($model,'task_visible'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'task_filter'); ?>
		<?php echo $form->textField($model,'task_filter'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'task_trash'); ?>
		<?php echo $form->textField($model,'task_trash'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_id'); ?>
		<?php echo $form->textField($model,'project_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->