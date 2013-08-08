<?php
/* @var $this PassengerTypesController */
/* @var $model PassengerTypes */

$this->breadcrumbs=array(
	'Passenger Types'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List PassengerTypes', 'url'=>array('index')),
	array('label'=>'Manage PassengerTypes', 'url'=>array('admin')),
);
?>

<h1>Create PassengerTypes</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>