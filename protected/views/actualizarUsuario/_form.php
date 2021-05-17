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

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ci'); ?>
		<?php echo $form->textField($model,'ci',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ci'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primerNombre'); ?>
		<?php echo $form->textField($model,'primerNombre',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'primerNombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundoNombre'); ?>
		<?php echo $form->textField($model,'segundoNombre',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'segundoNombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'primerApellido'); ?>
		<?php echo $form->textField($model,'primerApellido',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'primerApellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'segundoApellido'); ?>
		<?php echo $form->textField($model,'segundoApellido',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'segundoApellido'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'edad'); ?>
		<?php echo $form->textField($model,'edad'); ?>
		<?php echo $form->error($model,'edad'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sexo'); ?>
		<?php echo $form->textField($model,'sexo',array('size'=>12,'maxlength'=>12)); ?>
		<?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'etnia'); ?>
		<?php echo $form->textField($model,'etnia',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'etnia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'celular'); ?>
		<?php echo $form->textField($model,'celular',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'celular'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pregunta1'); ?>
		<?php echo $form->textField($model,'pregunta1',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'pregunta1'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pregunta2'); ?>
		<?php echo $form->textField($model,'pregunta2',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'pregunta2'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'pregunta3'); ?>
		<?php echo $form->textField($model,'pregunta3',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'pregunta3'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->