<?php
/* @var $this ProjectController */
/* @var $model Project */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'project-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'project_name'); ?>
		<?php echo $form->textField($model,'project_name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'project_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_description'); ?>
		<?php echo $form->textArea($model,'project_description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'project_description'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'group_id'); ?>
		<?php echo $form->dropDownList($model, 'id',
                CHtml::listData(Group::model()->with('trackerProjects')->findAll(), 'id', 'group_name')
       ); ?>
		<?php echo $form->error($model,'project_ID'); ?>
	</div>
        
<!--        <div class="row">
            <?php echo $form->labelEx($model, 'task_id'); ?>
            <?php
            echo $form->dropDownList($model, 'id', CHtml::listData(Task::model()->with('project')->findAll(), 'id', 'task_name'), array('multiple' => true)
            );
            ?>
<?php echo $form->error($model, 'project_ID'); ?>
        </div>-->

<!--	<div class="row">
		<?php echo $form->labelEx($model,'project_visible'); ?>
		<?php echo $form->textField($model,'project_visible'); ?>
		<?php echo $form->error($model,'project_visible'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_filter'); ?>
		<?php echo $form->textField($model,'project_filter'); ?>
		<?php echo $form->error($model,'project_filter'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'project_trash'); ?>
		<?php echo $form->textField($model,'project_trash'); ?>
		<?php echo $form->error($model,'project_trash'); ?>
	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->