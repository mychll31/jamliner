<?php
/* @var $this SchedulesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Schedules',
);

$this->menu=array(
	array('label'=>'Create Schedules', 'url'=>array('create')),
	array('label'=>'Manage Schedules', 'url'=>array('admin')),
);
?>

<h1>Schedules</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
