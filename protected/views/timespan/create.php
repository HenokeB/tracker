<?php
/* @var $this TimespanController */
/* @var $model Timespan */

$this->breadcrumbs=array(
	'Timespans'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Timespan', 'url'=>array('index')),
	array('label'=>'Manage Timespan', 'url'=>array('admin')),
);
?>

<h1>Create Timespan</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>