<?php
/* @var $this SchedulesController */
/* @var $model Schedules */

$this->breadcrumbs=array(
	'Schedules'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Schedules', 'url'=>array('index')),
	array('label'=>'Create Schedules', 'url'=>array('create')),
	array('label'=>'Update Schedules', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Schedules', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Schedules', 'url'=>array('admin')),
);
?>

<h1>View Schedules #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'bus_id',
		'departure_time',
		'arrival_time',
		'status',
		'created_at',
	),
)); ?>
