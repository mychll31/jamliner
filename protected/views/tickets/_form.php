<?php
/* @var $this TicketsController */
/* @var $model Tickets */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'tickets-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
		<?php echo $form->error($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tkt_no'); ?>
		<?php echo $form->textField($model,'tkt_no',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'tkt_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'schedule_id'); ?>
		<?php echo $form->textField($model,'schedule_id'); ?>
		<?php echo $form->error($model,'schedule_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seat_id'); ?>
		<?php echo $form->textField($model,'seat_id'); ?>
		<?php echo $form->error($model,'seat_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bus_id'); ?>
		<?php echo $form->textField($model,'bus_id'); ?>
		<?php echo $form->error($model,'bus_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'route_id'); ?>
		<?php echo $form->textField($model,'route_id'); ?>
		<?php echo $form->error($model,'route_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'status'); ?>
		<?php echo $form->textField($model,'status'); ?>
		<?php echo $form->error($model,'status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_at'); ?>
		<?php echo $form->textField($model,'created_at'); ?>
		<?php echo $form->error($model,'created_at'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->