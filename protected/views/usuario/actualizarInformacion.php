<?php
/* @var $this UsuarioController */
$this->pageTitle=Yii::app()->name . ' - Actualizar Informacion';
$this->breadcrumbs=array('Actualizar Informacion');

$idUsuario1 = Usuario::model()->findAll();
$cedula1 = Yii::app()->user->name;
$msg = '';
foreach ($idUsuario1 as $valores)
{
    if ($cedula1 === $valores->ci)
    {
        $primerNombre1 = $valores->primerNombre;
        $primerApellido1 = $valores->primerApellido;
        $email1 = $valores->email;
    }
}

?>
<h3 align="center" style="color:dodgerblue;">Actualizar Informacion</h3>

<strong class = 'text-info'><?php echo $msg; ?></strong>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'method' => 'POST',
        'action' => Yii::app()->createUrl('site/actualizarInformacion'),
        'id' => 'form',
        'enableClientValidation' => true,
        'enableAjaxValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true,
        ),
    ));
    ?>

    <p class="note" align="center">Los campos con <span class="required">*</span> son requeridos.</p>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'Cedula'); ?>
        <?php echo $form->textField($model,'ci',array("value"=>$cedula1));?>
        <?php echo $form->error($model,'ci', array("class" => "text-error")); ?>
    </div>
<br>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'primerNombre'); ?>
        <?php echo $form->textField($model,'primerNombre',array("value"=>$primerNombre1)); ?>
        <?php echo $form->error($model,'primerNombre', array("class" => "text-error")); ?>
    </div>
<br>
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'primerApellido'); ?>
        <?php echo $form->textField($model,'primerApellido',array("value"=>$primerApellido1));?>
        <?php echo $form->error($model,'primerApellido', array("class" => "text-error")); ?>
    </div>
<br>
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email',array("value"=>$email1));?>
        <?php echo $form->error($model,'email', array("class" => "text-error")); ?>
    </div>
<br>

    <div class="row buttons" align="center">
        <?php echo CHtml::submitButton('Actualizar Informacion', array('class' => 'btn btn-danger')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>
