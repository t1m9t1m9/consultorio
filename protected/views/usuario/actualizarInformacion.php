<?php
/* @var $this UsuarioController */
$this->pageTitle=Yii::app()->name . ' - Actualizar Informacion';
$this->breadcrumbs=array('Actualizar Informacion');
?>
<h3 align="center" style="color:dodgerblue;">Actualizar Informacion</h3>

<!--<strong class = 'text-info'>--><?php //echo $msg; ?><!--</strong>-->

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
        <?php echo $form->labelEx($model,'ci'); ?>
        <?php echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $cedula;?>
        <?php echo $form->error($model,'ci', array("class" => "text-error")); ?>
    </div>
<br>
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'nombre1'); ?>
        <?php echo $form->textField($model,'nombre1');echo "<br>"; echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $primerNombre; ?>
        <?php echo $form->error($model,'nombre1', array("class" => "text-error")); ?>
    </div>
<br>
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'nombre2'); ?>
        <?php echo $form->textField($model,'nombre2');echo "<br>"; echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $segundoNombre;?>
        <?php echo $form->error($model,'nombre2', array("class" => "text-error")); ?>
    </div>
<br>
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'apellido1'); ?>
        <?php echo $form->textField($model,'apellido1');echo "<br>"; echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $primerApellido;?>
        <?php echo $form->error($model,'apellido1', array("class" => "text-error")); ?>
    </div>
<br>
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'apellido2'); ?>
        <?php echo $form->textField($model,'apellido2');echo "<br>"; echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $segundoApellido;?>
        <?php echo $form->error($model,'apellido2', array("class" => "text-error")); ?>
    </div>
<br>
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'edad'); ?>
        <?php echo $form->numberField($model,'edad');echo "<br>"; echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $edad;?>
        <?php echo $form->error($model,'edad', array("class" => "text-error")); ?>
    </div>
 <br>   <!--SEXO-->
    <div class="row" align="center">
        <?php
        echo $form->labelEx($model, 'sexo');
        echo $form->radioButtonList(
            $model,
            'sexo',
            array('1' => 'MASCULINO', '2' => 'FEMENINO'),
            array(
                'labelOptions' => array('style' => 'display:inline'),
                'separator' => '<br>',
                'template' => ' {label}: {input} ',
            )
        );
        echo "<br>";echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $sexo;
        ?>

    </div>
    <br>
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
                'separator' => '<br> ',
                'template' => ' {label}: {input} ',
            )
        );
        echo "<br>"; echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $etnia;
        ?>
    </div>
    <br>
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'email'); ?>
        <?php echo $form->textField($model,'email');echo "<br>"; echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $email;?>
        <?php echo $form->error($model,'email', array("class" => "text-error")); ?>
    </div>
<br>
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'celular'); ?>
        <?php echo $form->textField($model,'celular');echo "<br>"; echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $celular;?>
        <?php echo $form->error($model,'celular', array("class" => "text-error")); ?>
    </div>
<br>
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'direccion'); ?>
        <?php echo $form->textField($model,'direccion');echo "<br>"; echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $direccion;?>
        <?php echo $form->error($model,'direccion', array("class" => "text-error")); ?>
    </div>

    <br>

    <div class="row" align="center">
        <h4>Preguntas de seguridad</h4>
        <?php echo $form->labelEx($model,'pregunta1'); ?>
        <?php echo $form->textField($model,'pregunta1');echo "<br>"; echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $pregunta1;?>
        <?php echo $form->error($model,'pregunta1', array("class" => "text-error")); ?>
    </div>
<br>
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'pregunta2'); ?>
        <?php echo $form->textField($model,'pregunta2');echo "<br>"; echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $pregunta2;?>
        <?php echo $form->error($model,'pregunta2', array("class" => "text-error")); ?>
    </div>
<br>
    <div class="row" align="center">
        <?php echo $form->labelEx($model,'pregunta3'); ?>
        <?php echo $form->textField($model,'pregunta3');echo "<br>"; echo "<b style='color: #ffffff; background: #0e819e'> Valor Actual:</b>";echo " "; echo $pregunta3;?>
        <?php echo $form->error($model,'pregunta3', array("class" => "text-error")); ?>
    </div>
<br>


    <div class="row buttons" align="center">

        <?php echo CHtml::submitButton('Actualizar', array('class' => 'btn btn-danger')); ?>
    </div>

    <?php $this->endWidget(); ?>
</div>
