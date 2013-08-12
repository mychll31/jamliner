<?php
/* @var $this TicketsController */
/* @var $model Tickets */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'tkt_no'); ?>
		<?php echo $form->textField($model,'tkt_no',array('size'=>32,'maxlength'=>32)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'schedule_id'); ?>
		<?php echo $form->textField($model,'schedule_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'seat_id'); ?>
		<?php echo $form->textField($model,'seat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bus_id'); ?>
		<?php echo $form->textField($model,'bus_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'route_id'); ?>
		<?php echo $form->textField($model,'route_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
