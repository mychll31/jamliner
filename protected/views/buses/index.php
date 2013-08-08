<?php
/* @var $this BusesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Buses',
);

$this->menu=array(
	array('label'=>'Create Buses', 'url'=>array('create')),
	array('label'=>'Manage Buses', 'url'=>array('admin')),
);
?>

<h1>Buses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
