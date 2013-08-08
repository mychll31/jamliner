<?php
/* @var $this SchedulesController */
/* @var $model Schedules */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'schedules-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'bus_id'); ?>
		<?php echo $form->textField($model,'bus_id'); ?>
		<?php echo $form->error($model,'bus_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'departure_time'); ?>
		<?php echo $form->textField($model,'departure_time'); ?>
		<?php echo $form->error($model,'departure_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'arrival_time'); ?>
		<?php echo $form->textField($model,'arrival_time'); ?>
		<?php echo $form->error($model,'arrival_time'); ?>
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