<?php
/* @var $this PassengerTypesController */
/* @var $model PassengerTypes */

$this->breadcrumbs=array(
	'Passenger Types'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List PassengerTypes', 'url'=>array('index')),
	array('label'=>'Create PassengerTypes', 'url'=>array('create')),
	array('label'=>'Update PassengerTypes', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete PassengerTypes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage PassengerTypes', 'url'=>array('admin')),
);
?>

<h1>View PassengerTypes #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'discount',
		'active',
	),
)); ?>
