<?php
/* @var $this TicketsController */
/* @var $model Tickets */

$this->breadcrumbs=array(
		'Tickets'=>array('index'),
		'Manage',
);

$this->menu=array(
	array('label'=>'List Tickets', 'url'=>array('index')),
	array('label'=>'Create Tickets', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#tickets-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<?php $this->renderPartial('ticketbuy',array(
	'model'=>$model,
)); ?>
<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'tickets-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'tkt_no',
		'schedule_id',
		'seat_id',
		'bus_id',
		'route_id',
		/*
		'status',
		'created_at',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
