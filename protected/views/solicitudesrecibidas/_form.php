<?php
/* @var $this SolicitudesrecibidasController */
/* @var $model Solicitudesrecibidas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'solicitudesrecibidas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoSolicitud'); ?>
        <?php echo $form->dropDownList($model,'tipoSolicitud', array(
            "RECETAS"=>"RECETAS",
            "CERTIFICADO MEDICO"=>"CERTIFICADO MEDICO",
            "PEDIDO DE IMAGENES"=>"PEDIDO DE IMAGENES",
            "PEDIDO DE LABORATORIO"=>"PEDIDO DE LABORATORIO",
        )); ?>
		<?php echo $form->error($model,'tipoSolicitud'); ?>
	</div>

    <div class="row">
    <?php echo $form->labelEx($model,'ciUsuario'); ?>
    <?php echo $form->dropDownList($model,'ciUsuario',
    CHtml::listData(Usuario::model()->findAll(), 'ci', 'ci'),
    array('empty'=>'Seleccione un Usuario'));?>
    <?php echo $form->error($model,'ciUsuario'); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'respuesta'); ?>
        <?php echo $form->dropDownList($model,'respuesta', array(
            "SI"=>"SI",
            "NO"=>"NO",
        )); ?>
		<?php echo $form->error($model,'respuesta'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'observaciones'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('size'=>32,'maxlength'=>32,'readonly'=> true)); ?>
		<?php echo $form->error($model,'nombre'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('size'=>32,'maxlength'=>32,'readonly'=> true)); ?>
		<?php echo $form->error($model,'apellido'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->