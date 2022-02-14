<?php
$this->pageTitle=Yii::app()->name . ' - Registro';
$this->breadcrumbs=array('Registro');
?>

<h1 align="center" style="color:dodgerblue">Registro para el Login</h1><br>
<div align="center">
    <h2 style="color: red"><b><?php echo $msg; ?></b></h2>

</div>
<p align="center">Por favor llene los siguientes campos :</p>

<div class="form">
    <?php
        $form = $this->beginWidget('CActiveForm', array(
        'method' => 'POST',
        'action' => Yii::app()->createUrl('site/registro'),
        'id' => 'form',
        'enableClientValidation' => true,
        'enableAjaxValidation' => true,
        'clientOptions' => array(
                                    'validateOnSubmit' => true
        ),
    ));
?>
    <p class="note" align="center">Los campos con <span class="required">*</span> son requeridos.</p>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'ci'); ?>
        <?php echo $form->textField($model,'ci'); ?>
        <?php echo $form->error($model,'ci', array("class" => "text-error")); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'nombre1'); ?>
        <?php echo $form->textField($model,'nombre1'); ?>
        <?php echo $form->error($model,'nombre1', array("class" => "text-error")); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'apellido1'); ?>
        <?php echo $form->textField($model,'apellido1'); ?>
        <?php echo $form->error($model,'apellido1', array("class" => "text-error")); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email'); ?>
        <?php echo $form->error($model,'email', array("class" => "text-error")); ?>
    </div>

    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'password');
        echo $form->passwordField($model, 'password');
        echo $form->error($model, 'password', array('class' => 'text-error'));
        ?>
    </div>

    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'repetir_password');
        echo $form->passwordField($model, 'repetir_password');
        echo $form->error($model, 'repetir_password', array('class' => 'text-error'));
        ?>
    </div>
<br>

    <div class="row buttons" align="center">

        <?php echo CHtml::submitButton('Registrarme', array('class' => 'btn btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>

