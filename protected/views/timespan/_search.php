<?php
/* @var $this TimespanController */
/* @var $model Timespan */
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
		<?php echo $form->label($model,'timespan_in'); ?>
		<?php echo $form->textField($model,'timespan_in'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timespan_out'); ?>
		<?php echo $form->textField($model,'timespan_out'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timespan_time'); ?>
		<?php echo $form->textField($model,'timespan_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'user_id'); ?>
		<?php echo $form->textField($model,'user_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'project_id'); ?>
		<?php echo $form->textField($model,'project_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'task_id'); ?>
		<?php echo $form->textField($model,'task_id',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timespan_comment'); ?>
		<?php echo $form->textArea($model,'timespan_comment',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timespan_comment_type'); ?>
		<?php echo $form->textField($model,'timespan_comment_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'timespan_cleared'); ?>
		<?php echo $form->textField($model,'timespan_cleared'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->