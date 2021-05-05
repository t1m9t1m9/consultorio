<?php
$this->pageTitle=Yii::app()->name . ' - Registro';
$this->breadcrumbs=array('Registro');
?>

<h1 align="center">Registro para el Login</h1><br>

<p align="center">Por favor llene los siguientes campos :</p>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
    'method' => 'POST',
    'action' => Yii::app()->createUrl('site/registro'),
    #'id' => 'form',
    'enableClientValidation' => true,
    #'enableAjaxValidation' => true,
    'clientOptions' => array(
        'validateOnSubmit' => true,
        'validateOnChange' => true,
        'validateOnType' => true,
    ),
    ));
?>
    <p class="note" align="center">Los campos con <span class="required">*</span> son requeridos.</p>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'cedula'); ?>
        <?php echo $form->textField($model,'cedula'); ?>
        <?php echo $form->error($model,'cedula'); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'nombre1'); ?>
        <?php echo $form->textField($model,'nombre1'); ?>
        <?php echo $form->error($model,'nombre1'); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'nombre2'); ?>
        <?php echo $form->textField($model,'nombre2'); ?>
        <?php echo $form->error($model,'nombre2'); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'apellido1'); ?>
        <?php echo $form->textField($model,'apellido1'); ?>
        <?php echo $form->error($model,'apellido1'); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'apellido2'); ?>
        <?php echo $form->textField($model,'apellido2'); ?>
        <?php echo $form->error($model,'apellido2'); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'edad'); ?>
        <?php echo $form->numberField($model,'edad'); ?>
        <?php echo $form->error($model,'edad'); ?>
    </div>
    <!--SEXO-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'sexo');
        echo $form->radioButtonList(
            $model,
            'sexo',
            array('1' => 'MASCULINO', '2' => 'FEMENINO'),
            array(
                'labelOptions' => array('style' => 'display:inline'),
                'separator' => '',
                'template' => ' {label}: {input} ',
            )
        );
        ?>
    </div>
<!--    <div class="row">-->
<!--        --><?php //echo $form->labelEx($model,'sexo'); ?>
<!--        --><?php //echo $form->dropDownList($model, 'sexo', array('MASCULINO'=>'MASCULINO', 'FEMENINO'=>'FEMENINO')); ?>
<!--        --><?php //echo $form->error($model,'sexo'); ?>
<!--    </div>-->

    <!--ETNIA-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'etnia');
        echo $form->radioButtonList(
            $model,
            'etnia',
            array('1' => 'BLANCO', '2' => 'MESTIZO', '3' => 'INDIGENA', '4' => 'AFROECUATORIANO', '5' => 'MONTUBIO'),
            array(
                'labelOptions' => array('style' => 'display:inline'),
                'separator' => ' ',
                'template' => ' {label}: {input} ',
            )
        );
        ?>
    </div>

<!--    <div class="row">-->
<!--        --><?php //echo $form->labelEx($model,'etnia'); ?>
<!--        --><?php //echo $form->dropDownList($model, 'sexo', array('BLANCO'=>'BLANCO', 'MESTIZO'=>'MESTIZO', 'INDIGENA'=>'INDIGENA', 'AFROECUATORIANO'=>'AFROECUATORIANO', 'MONTUBIO'=>'MONTUBIO')); ?>
<!--        --><?php //echo $form->error($model,'etnia'); ?>
<!--    </div>-->

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email'); ?>
        <?php echo $form->error($model,'email'); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'celular'); ?>
        <?php echo $form->textField($model,'celular'); ?>
        <?php echo $form->error($model,'celular'); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'direccion'); ?>
        <?php echo $form->textField($model,'direccion'); ?>
        <?php echo $form->error($model,'direccion'); ?>
    </div>
<br>

    <div class="row" align="center">
        <h4>Preguntas de seguridad</h4>
        <?php echo $form->labelEx($model,'respuesta1'); ?>
        <?php echo $form->textField($model,'respuesta1'); ?>
        <?php echo $form->error($model,'respuesta1'); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'respuesta2'); ?>
        <?php echo $form->textField($model,'respuesta2'); ?>
        <?php echo $form->error($model,'respuesta2'); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'respuesta3'); ?>
        <?php echo $form->textField($model,'respuesta3'); ?>
        <?php echo $form->error($model,'respuesta3'); ?>
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

    <div class="row buttons" align="center">

        <?php echo CHtml::submitButton('Registrarme', array('class' => 'btn btn-primary')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div><!-- form -->

