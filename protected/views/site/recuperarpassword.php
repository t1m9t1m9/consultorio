<?php
$this->pageTitle=Yii::app()->name . "Recuperar Password";
$this->breadcrumbs=array("Recuperar Password");

echo $msg;
?>
<h1 style="text-align:center; color:dodgerblue">RECUPERAR PASSWORD</h1>

<h4 style="text-align: center" class="text-info"><?php echo $msg1; ?></h4>
<div class="form" style="text-align: center">
    <?php $form = $this->beginWidget('CActiveForm',
        array(
                'method' => 'POST',
                'action' => Yii::app()->createUrl('site/recuperarpassword'),
                'enableClientValidation' => true,
                'clientOptions' => array(
                                            'validateOnSubmit' => true,
                ),
        ));
    ?>

    <div class="row" style="text-align: center">
        <?php
            echo $form->labelEx($model, 'username');
            echo $form->textField($model, 'username');
            echo $form->error($model, 'username', array('class' => 'text-error'));
        ?>
    </div>

    <div class="row" style="text-align: center">
        <?php
        echo $form->labelEx($model, 'email');
        echo $form->textField($model, 'email');
        echo $form->error($model, 'email', array('class' => 'text-error'));
        ?>
    </div>

    <div class="row" style="text-align: center">
        <?php
        echo $form->labelEx($model, 'captcha');
        echo $form->textField($model, 'captcha');echo "<br>";
        $this->widget('CCaptcha',
            array('buttonLabel' => 'Actualizar codigo'));

        ?>
        <div class="text-info">
            <b>Por favor, ingrese el texto que ve en la imagen.</b>
        </div>
        <?php
        echo $form->error($model, 'captcha', array('class' => 'text-error'));
        ?>
    </div>

    <div class="row" style="text-align: center"><br>
        <?php
        echo CHtml::submitButton('Recuperar Password', array('class' => 'btn btn-primary'));
        ?>
    </div>

    <?php $this->endWidget(); ?>
</div>