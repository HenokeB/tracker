<?php
/* @var $this TimespanController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Timespans',
);

$this->menu=array(
	array('label'=>'Create Timespan', 'url'=>array('create')),
	array('label'=>'Manage Timespan', 'url'=>array('admin')),
);
?>

<h1>Timespans</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
