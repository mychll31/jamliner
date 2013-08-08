<?php
/* @var $this PassengerTypesController */
/* @var $model PassengerTypes */

$this->breadcrumbs=array(
	'Passenger Types'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List PassengerTypes', 'url'=>array('index')),
	array('label'=>'Create PassengerTypes', 'url'=>array('create')),
	array('label'=>'View PassengerTypes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage PassengerTypes', 'url'=>array('admin')),
);
?>

<h1>Update PassengerTypes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>