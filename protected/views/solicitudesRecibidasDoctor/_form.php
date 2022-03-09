<?php
/* @var $this SolicitudesRecibidasDoctorController */
/* @var $model SolicitudesRecibidasDoctor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'solicitudes-recibidas-doctor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'tipoSolicitud'); ?>
		<?php echo $form->textField($model,'tipoSolicitud',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'tipoSolicitud', array("class" => "text-error")); ?>
	</div>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'ciUsuario'); ?>
		<?php echo $form->textField($model,'ciUsuario',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ciUsuario', array("class" => "text-error")); ?>
	</div>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'respuesta'); ?>
		<?php echo $form->textField($model,'respuesta'); ?>
		<?php echo $form->error($model,'respuesta', array("class" => "text-error")); ?>
	</div>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'observaciones', array("class" => "text-error")); ?>
	</div>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'nombre', array("class" => "text-error")); ?>
	</div>

	<div class="row" align="center">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'apellido', array("class" => "text-error")); ?>
	</div>

    <div class="row buttons" align="center">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Actualizar Solicitud', array('class'=>'btn btn-primary')); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->