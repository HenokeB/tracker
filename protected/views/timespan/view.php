<?php
/* @var $this TimespanController */
/* @var $model Timespan */

$this->breadcrumbs=array(
	'Timespans'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Timespan', 'url'=>array('index')),
	array('label'=>'Create Timespan', 'url'=>array('create')),
	array('label'=>'Update Timespan', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Timespan', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Timespan', 'url'=>array('admin')),
);
?>

<h1>View Timespan #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'timespan_in',
		'timespan_out',
		'timespan_time',
		'user_id',
		'project_id',
		'task_id',
		'timespan_comment',
		'timespan_comment_type',
		'timespan_cleared',
	),
)); ?>
