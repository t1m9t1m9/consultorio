<?php
/* @var $this ImagenesController */
/* @var $model Imagenes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'imagenes-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
		<?php echo $form->textField($model,'fecha'); ?>
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'archivo'); ?>
		<?php echo $form->textField($model,'archivo',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'archivo'); ?>
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