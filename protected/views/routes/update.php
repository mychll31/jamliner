<?php
/* @var $this RoutesController */
/* @var $model Routes */

$this->breadcrumbs=array(
	'Routes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Routes', 'url'=>array('index')),
	array('label'=>'Create Routes', 'url'=>array('create')),
	array('label'=>'View Routes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Routes', 'url'=>array('admin')),
);
?>

<h1>Update Routes <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>