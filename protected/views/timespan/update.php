<?php
/* @var $this TimespanController */
/* @var $model Timespan */

$this->breadcrumbs=array(
	'Timespans'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Timespan', 'url'=>array('index')),
	array('label'=>'Create Timespan', 'url'=>array('create')),
	array('label'=>'View Timespan', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Timespan', 'url'=>array('admin')),
);
?>

<h1>Update Timespan <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>