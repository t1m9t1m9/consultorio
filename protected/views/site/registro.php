<?php
$this->pageTitle=Yii::app()->name . ' - Registro';
$this->breadcrumbs=array('Registro');
?>

<h1 align="center">Registro para el Login</h1><br>
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
        <?php echo $form->error($model,'ci'); ?>
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
        <?php echo $form->labelEx($model,'pregunta1'); ?>
        <?php echo $form->textField($model,'pregunta1'); ?>
        <?php echo $form->error($model,'pregunta1'); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'pregunta2'); ?>
        <?php echo $form->textField($model,'pregunta2'); ?>
        <?php echo $form->error($model,'pregunta2'); ?>
    </div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'pregunta3'); ?>
        <?php echo $form->textField($model,'pregunta3'); ?>
        <?php echo $form->error($model,'pregunta3'); ?>
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
</div>

