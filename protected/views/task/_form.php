<?php
/* @var $this TaskController */
/* @var $model Task */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'task-form',
        // Please note: When you enable ajax validation, make sure the corresponding
        // controller action is handling ajax validation correctly.
        // There is a call to performAjaxValidation() commented in generated controller code.
        // See class documentation of CActiveForm for details on this.
        'enableAjaxValidation' => false,
            ));
    ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'task_name'); ?>
        <?php echo $form->textField($model, 'task_name', array('size' => 60, 'maxlength' => 255)); ?>
        <?php echo $form->error($model, 'task_name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'task_description'); ?>
        <?php echo $form->textArea($model, 'task_description', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'task_description'); ?>
    </div>

    <!--	<div class="row">
    <?php echo $form->labelEx($model, 'task_visible'); ?>
    <?php echo $form->textField($model, 'task_visible'); ?>
    <?php echo $form->error($model, 'task_visible'); ?>
            </div>
    
            <div class="row">
    <?php echo $form->labelEx($model, 'task_filter'); ?>
    <?php echo $form->textField($model, 'task_filter'); ?>
    <?php echo $form->error($model, 'task_filter'); ?>
            </div>
    
            <div class="row">
    <?php echo $form->labelEx($model, 'task_trash'); ?>
    <?php echo $form->textField($model, 'task_trash'); ?>
    <?php echo $form->error($model, 'task_trash'); ?>
            </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'project_id'); ?>
        <?php echo $form->textField($model, 'project_id', array('size' => 10, 'maxlength' => 10)); ?>
        <?php echo $form->error($model, 'project_id'); ?>
    </div>-->
    
    <div class="row">
        <?php echo $form->labelEx($model, 'project_id'); ?>
        <?php
        echo $form->dropDownList($model, 'project_id', CHtml::listData(Project::model()->with('tasks')->findAll(), 'id', 'project_name')
        );
        ?>
        <?php echo $form->error($model, 'project_id'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->