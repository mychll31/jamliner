<?php
/* @var $this SchedulesController */
/* @var $model Schedules */

$this->breadcrumbs=array(
	'Schedules'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Schedules', 'url'=>array('index')),
	array('label'=>'Create Schedules', 'url'=>array('create')),
	array('label'=>'View Schedules', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Schedules', 'url'=>array('admin')),
);
?>

<h1>Update Schedules <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>