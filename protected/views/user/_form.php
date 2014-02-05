<?php
/* @var $this UserController */
/* @var $model User */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'user-form',
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
        <?php echo $form->labelEx($model, 'username'); ?>
        <?php echo $form->textField($model, 'username', array('size' => 60, 'maxlength' => 130)); ?>
        <?php echo $form->error($model, 'username'); ?>
    </div>

    <!--	<div class="row">
    <?php echo $form->labelEx($model, 'user_alias'); ?>
    <?php echo $form->textField($model, 'user_alias', array('size' => 20, 'maxlength' => 20)); ?>
    <?php echo $form->error($model, 'user_alias'); ?>
            </div>
    
            <div class="row">
    <?php echo $form->labelEx($model, 'user_sts'); ?>
    <?php echo $form->textField($model, 'user_sts'); ?>
    <?php echo $form->error($model, 'user_sts'); ?>
            </div>
    
            <div class="row">
    <?php echo $form->labelEx($model, 'user_trash'); ?>
    <?php echo $form->textField($model, 'user_trash'); ?>
    <?php echo $form->error($model, 'user_trash'); ?>
            </div>
    
            <div class="row">
    <?php echo $form->labelEx($model, 'user_active'); ?>
    <?php echo $form->textField($model, 'user_active'); ?>
    <?php echo $form->error($model, 'user_active'); ?>
            </div>-->
        <div class="row">
		<?php echo $form->labelEx($model,'group_id'); ?>
		<?php echo $form->dropDownList($model, 'id',
                CHtml::listData(Group::model()->with('trackerUsers')->findAll(), 'id', 'group_name')); ?>
		<?php echo $form->error($model,'project_ID'); ?>
	</div>


    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->passwordField($model, 'password', array('size' => 60, 'maxlength' => 254)); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'user_email'); ?>
        <?php echo $form->textField($model, 'user_email', array('size' => 60, 'maxlength' => 160)); ?>
        <?php echo $form->error($model, 'user_email'); ?>
    </div>

    <!--	<div class="row">
    <?php echo $form->labelEx($model, 'ban'); ?>
    <?php echo $form->textField($model, 'ban'); ?>
    <?php echo $form->error($model, 'ban'); ?>
            </div>
    
            <div class="row">
    <?php echo $form->labelEx($model, 'banTime'); ?>
    <?php echo $form->textField($model, 'banTime'); ?>
    <?php echo $form->error($model, 'banTime'); ?>
            </div>
    
            <div class="row">
    <?php echo $form->labelEx($model, 'secure'); ?>
    <?php echo $form->textField($model, 'secure', array('size' => 60, 'maxlength' => 60)); ?>
    <?php echo $form->error($model, 'secure'); ?>
            </div>
    
            <div class="row">
    <?php echo $form->labelEx($model, 'lastProject'); ?>
    <?php echo $form->textField($model, 'lastProject'); ?>
    <?php echo $form->error($model, 'lastProject'); ?>
            </div>
    
            <div class="row">
    <?php echo $form->labelEx($model, 'lastTask'); ?>
    <?php echo $form->textField($model, 'lastTask'); ?>
    <?php echo $form->error($model, 'lastTask'); ?>
            </div>
    
            <div class="row">
    <?php echo $form->labelEx($model, 'lastRecord'); ?>
    <?php echo $form->textField($model, 'lastRecord'); ?>
    <?php echo $form->error($model, 'lastRecord'); ?>
            </div>
    
            <div class="row">
    <?php echo $form->labelEx($model, 'timespace_in'); ?>
    <?php echo $form->textField($model, 'timespace_in', array('size' => 60, 'maxlength' => 60)); ?>
    <?php echo $form->error($model, 'timespace_in'); ?>
            </div>
    
            <div class="row">
    <?php echo $form->labelEx($model, 'timespace_out'); ?>
    <?php echo $form->textField($model, 'timespace_out', array('size' => 60, 'maxlength' => 60)); ?>
    <?php echo $form->error($model, 'timespace_out'); ?>
            </div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->