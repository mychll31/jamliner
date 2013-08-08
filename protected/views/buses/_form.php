<?php
/* @var $this BusesController */
/* @var $model Buses */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'buses-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'seats'); ?>
		<?php echo $form->textField($model,'seats'); ?>
		<?php echo $form->error($model,'seats'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bus_info'); ?>
		<?php echo $form->textArea($model,'bus_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'bus_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'driver'); ?>
		<?php echo $form->textField($model,'driver',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'driver'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'driver_phone'); ?>
		<?php echo $form->textField($model,'driver_phone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'driver_phone'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->