<?php
/* @var $this TicketsController */
/* @var $model Tickets */

$this->breadcrumbs=array(
	'Tickets'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tickets', 'url'=>array('index')),
	array('label'=>'Create Tickets', 'url'=>array('create')),
	array('label'=>'View Tickets', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tickets', 'url'=>array('admin')),
);
?>

<h1>Update Tickets <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>