<?php
/* @var $this BusesController */
/* @var $data Buses */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('seats')); ?>:</b>
	<?php echo CHtml::encode($data->seats); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number')); ?>:</b>
	<?php echo CHtml::encode($data->number); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bus_info')); ?>:</b>
	<?php echo CHtml::encode($data->bus_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('driver')); ?>:</b>
	<?php echo CHtml::encode($data->driver); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('driver_phone')); ?>:</b>
	<?php echo CHtml::encode($data->driver_phone); ?>
	<br />


</div>