<?php
/* @var $this ActualizarUsuarioController */
/* @var $model ActualizarUsuario */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'actualizar-usuario-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note" align="center">Los campos con <span class="required">*</span> son requeridos.</p>

<!--	--><?php //echo $form->errorSummary($model); ?>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'ci'); ?>
		<?php echo $form->textField($model,'ci',array('size'=>10,'maxlength'=>10, 'minlength'=>10)); ?>
		<?php echo $form->error($model,'ci', array("class" => "text-error")); ?>
	</div>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'primerNombre'); ?>
		<?php echo $form->textField($model,'primerNombre',array('size'=>32,'maxlength'=>32, 'minlength'=>3)); ?>
		<?php echo $form->error($model,'primerNombre', array("class" => "text-error")); ?>
	</div>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'primerApellido'); ?>
		<?php echo $form->textField($model,'primerApellido',array('size'=>32,'maxlength'=>32, 'minlength'=>3)); ?>
		<?php echo $form->error($model,'primerApellido', array("class" => "text-error")); ?>
	</div>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email', array("class" => "text-error")); ?>
	</div>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128, 'minlength'=>8)); ?>
		<?php echo $form->error($model,'password', array("class" => "text-error")); ?>
	</div>
<br>

	<div class="row buttons" align="center">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Crear Usuario' : 'Save', array('class'=>'btn btn-primary')); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->