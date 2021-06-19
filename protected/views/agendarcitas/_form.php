<?php
/* @var $this AgendarcitasController */
/* @var $model Agenda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agenda-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
		<?php echo $form->textField($model,'hora',array('size'=>6,'maxlength'=>6)); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'confirmacion'); ?>
		<?php echo $form->textField($model,'confirmacion',array('size'=>2,'maxlength'=>2)); ?>
		<?php echo $form->error($model,'confirmacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciUsuario'); ?>
		<?php echo $form->textField($model,'ciUsuario',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ciUsuario'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->