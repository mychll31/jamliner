<?php
/* @var $this BusesController */
/* @var $model Buses */

$this->breadcrumbs=array(
	'Buses'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Buses', 'url'=>array('index')),
	array('label'=>'Create Buses', 'url'=>array('create')),
	array('label'=>'Update Buses', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Buses', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Buses', 'url'=>array('admin')),
);
?>

<h1>View Buses #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'seats',
		'number',
		'bus_info',
		'driver',
		'driver_phone',
	),
)); ?>
