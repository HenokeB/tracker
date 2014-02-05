<?php
/* @var $this TimespanController */
/* @var $model Timespan */
/* @var $form CActiveForm */
?>

<div class="form">

    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'id' => 'timespan-form',
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
        <?php echo $form->labelEx($model, 'timespan_in'); ?>
        <!-- <?php //echo $form->textField($model, 'timespan_in');              ?> -->

        <?php
//        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
//            'name' => 'timespan_in',
//            'attribute' => 'timespan_in',
//            'model' => $model,
//            'options' => array(
//                'dateFormat' => 'yy-mm-dd',
//                'onSelect'=>'js:function(i,j){
//
//                       function JSClock() {
//                          var time = new Date();
//                          var hour = time.getHours();
//                          var minute = time.getMinutes();
//                          var second = time.getSeconds();
//                          var temp="";
//                          temp +=(hour<10)? "0"+hour : hour;
//                          temp += (minute < 10) ? ":0"+minute : ":"+minute ;
//                          temp += (second < 10) ? ":0"+second : ":"+second ;
//                          return temp;
//                        }
//
//                        $v=$(this).val();
//                        $(this).val($v+" "+JSClock());
//                          
//                 }',
//
//                'altFormat' => 'yy-mm-dd',
//                'changeMonth' => true,
//                'changeYear' => true,
//                'appendText' => 'yyyy-mm-dd',
//            ),
//        ));
        $this->widget(
                'ext.jui.EJuiDateTimePicker', array(
            'model' => $model,
            'attribute' => 'timespan_in',
            //'language'=> 'ru',//default Yii::app()->language
            //'mode'    => 'datetime',//'datetime' or 'time' ('datetime' default)
            'options' => array(
            //'dateFormat' => 'dd.mm.yy',
            //'timeFormat' => '',//'hh:mm tt' default
            ),
                )
        );
        ?>
        <?php echo $form->error($model, 'timespan_in'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'timespan_out'); ?>
        <!--      <?php echo $form->textField($model, 'timespan_out'); ?> -->

        <?php
//        $this->widget('zii.widgets.jui.CJuiDatePicker', array(
//            'name' => 'timespan_out',
//            'attribute' => 'timespan_out',
//            'model' => $model,
//            'options' => array(
//                'dateFormat' => 'yy-mm-dd',
//                'altFormat' => 'yy-mm-dd',
//                'onSelect' => 'js:function(i,j){
//
//                       function JSClock() {
//                          var time = new Date();
//                          var hour = time.getHours();
//                          var minute = time.getMinutes();
//                          var second = time.getSeconds();
//                          var temp="";
//                          temp +=(hour<10)? "0"+hour : hour;
//                          temp += (minute < 10) ? ":0"+minute : ":"+minute ;
//                          temp += (second < 10) ? ":0"+second : ":"+second ;
//                          return temp;
//                        }
//
//                        $v=$(this).val();
//                        $(this).val($v+" "+JSClock());
//                          
//                 }',
//                'changeMonth' => true,
//                'changeYear' => true,
//                'appendText' => 'yyyy-mm-dd',
//            ),
//        ));
        $this->widget(
                'ext.jui.EJuiDateTimePicker', array(
            'model' => $model,
            'attribute' => 'timespan_out',
            //'language'=> 'ru',//default Yii::app()->language
            //'mode'    => 'datetime',//'datetime' or 'time' ('datetime' default)
            'options' => array(
            //'dateFormat' => 'dd.mm.yy',
            //'timeFormat' => '',//'hh:mm tt' default
            ),
                )
        );
        ?>
        <?php echo $form->error($model, 'timespan_out'); ?>
    </div>

    <!--    <div class="row">
    <?php echo $form->labelEx($model, 'timespan_time'); ?>
    <?php echo $form->textField($model, 'timespan_time'); ?>
    <?php echo $form->error($model, 'timespan_time'); ?>
        </div>-->

    <!--    <div class="row">
    <?php echo $form->labelEx($model, 'user_id'); ?>
    <?php echo $form->textField($model, 'user_id', array('size' => 10, 'maxlength' => 10)); ?>
    <?php echo $form->error($model, 'user_id'); ?>
        </div>


    <div class="row">
        <?php echo $form->labelEx($model, 'user_id'); ?>
        <?php echo $form->dropDownList($model, 'user_id', User::model()->getUserOptions()); ?>
        <?php echo $form->error($model, 'user_id'); ?>
    </div>    
-->



    <!--    <div class="row">
    <?php echo $form->labelEx($model, 'project_id'); ?>
    <?php
    echo CHtml::dropDownList('project_id', '', CHtml::listData(Project::model()->with('timespans')->findAll(), 'id', 'project_name'), array(
        'prompt' => 'Select Project',
        'ajax' => array(
            'type' => 'POST',
            'url' => CController::createUrl('timespan/loadtask'),
            'update' => '#task_id',
            'data' => array('project_id' => 'js:this.value'),
            )));
    ?>
    <?php echo $form->error($model, 'project_id'); ?>
        </div>
    
        <div class="row">
    <?php echo $form->labelEx($model, 'task_id'); ?>
    <?php echo CHtml::dropDownList('task_id', '', array(), array('prompt' => 'Select Task')); ?>
    <?php echo $form->error($model, 'task_id'); ?>
        </div>-->

    <div class="row">
        <?php echo $form->labelEx($model, 'timespan_comment'); ?>
        <?php echo $form->textArea($model, 'timespan_comment', array('rows' => 6, 'cols' => 50)); ?>
        <?php echo $form->error($model, 'timespan_comment'); ?>
    </div>
    <!--
    <div class="row">
    <?php echo $form->labelEx($model, 'timespan_comment_type'); ?>
    <?php echo $form->textField($model, 'timespan_comment_type'); ?>
    <?php echo $form->error($model, 'timespan_comment_type'); ?>
    </div>

    <!--    <div class="row">
    <?php echo $form->labelEx($model, 'timespan_cleared'); ?>
    <?php echo $form->textField($model, 'timespan_cleared'); ?>
    <?php echo $form->error($model, 'timespan_cleared'); ?>
        </div>-->

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->