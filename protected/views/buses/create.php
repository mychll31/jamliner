<?php
/* @var $this BusesController */
/* @var $model Buses */

$this->breadcrumbs=array(
	'Buses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Buses', 'url'=>array('index')),
	array('label'=>'Manage Buses', 'url'=>array('admin')),
);
?>

<h1>Create Buses</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>