<?php
/* @var $this SolicitudesrecibidasController */
/* @var $model Solicitudesrecibidas */
/* @var $form CActiveForm */
$cedu = Yii::app()->user->name;
$datos = Usuario::model()->findAll();
foreach ($datos as $nombres)
{
    if($cedu == $nombres->ci)
    {
       $nombre=$nombres->primerNombre;
       $apellido=$nombres->primerApellido;
    }
}
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

    <p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'tipoSolicitud'); ?>
        <?php echo $form->dropDownList($model,'tipoSolicitud', array(
            ""=>"Seleccione una Opcion",
            "RECETAS"=>"RECETAS",
            "CERTIFICADO MEDICO"=>"CERTIFICADO MEDICO",
            "PEDIDOS DE IMAGENES"=>"PEDIDO DE IMAGENES",
            "PEDIDOS DE LABORATORIO"=>"PEDIDO DE LABORATORIO",
        )); ?>
		<?php echo $form->error($model,'tipoSolicitud', array("class" => "text-error")); ?>
	</div>

    <div class="row">
    <?php echo $form->labelEx($model,'ciUsuario'); ?>
    <?php echo $form->textField($model,'ciUsuario',array('value'=>$cedu, 'readonly'=> true)); ?>
    <?php echo $form->error($model,'ciUsuario', array("class" => "text-error")); ?>
    </div>

	<div class="row">
		<?php echo $form->labelEx($model,'respuesta'); ?>
        <?php echo $form->textField($model,'respuesta',array('readonly'=> true)); ?>
        <?php echo $form->error($model,'respuesta', array("class" => "text-error")); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'observaciones'); ?>
		<?php echo $form->textField($model,'observaciones',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'observaciones', array("class" => "text-error")); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre'); ?>
		<?php echo $form->textField($model,'nombre',array('value'=>$nombre,'size'=>32,'maxlength'=>32,'readonly'=> true)); ?>
		<?php echo $form->error($model,'nombre', array("class" => "text-error")); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'apellido'); ?>
		<?php echo $form->textField($model,'apellido',array('value'=>$apellido,'size'=>32,'maxlength'=>32,'readonly'=> true)); ?>
		<?php echo $form->error($model,'apellido', array("class" => "text-error")); ?>
	</div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Guardar Solicitud' : 'Save',array("class" => "btn btn-primary")); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->