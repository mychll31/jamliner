<?php
/* @var $this SchedulesController */
/* @var $model Schedules */

$this->breadcrumbs=array(
	'Schedules'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Schedules', 'url'=>array('index')),
	array('label'=>'Manage Schedules', 'url'=>array('admin')),
);
?>

<h1>Create Schedules</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>