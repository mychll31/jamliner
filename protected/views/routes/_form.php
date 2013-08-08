<?php
/* @var $this RoutesController */
/* @var $model Routes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'routes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'line'); ?>
		<?php echo $form->textField($model,'line',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'line'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'source'); ?>
		<?php echo $form->textField($model,'source',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'source'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'destination'); ?>
		<?php echo $form->textField($model,'destination',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'destination'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'distance'); ?>
		<?php echo $form->textField($model,'distance',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'distance'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'travel_time'); ?>
		<?php echo $form->textField($model,'travel_time',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'travel_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'other_info'); ?>
		<?php echo $form->textArea($model,'other_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'other_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fare_id'); ?>
		<?php echo $form->textField($model,'fare_id'); ?>
		<?php echo $form->error($model,'fare_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'active'); ?>
		<?php echo $form->textField($model,'active',array('size'=>1,'maxlength'=>1)); ?>
		<?php echo $form->error($model,'active'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->