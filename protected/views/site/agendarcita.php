<?php
$this->pageTitle=Yii::app()->name . ' - Agendar Cita';
$this->breadcrumbs=array('Agendar Cita');

?>
<link rel='stylesheet' type='text/css' href='fullcalendar.css' />
<script type='text/javascript' src='jquery.js'></script>
<script type='text/javascript' src='fullcalendar.js'></script>

<h1 align="center" style="color:dodgerblue">Agendar Cita</h1><br>

<div align="center">
    <h2 style="color: red"><b><?php echo $msg; ?></b></h2>

</div>
<p align="center">Por favor llene los siguientes campos :</p>

<div class="form">
    <?php
    $form = $this->beginWidget('CActiveForm', array(
        'method' => 'POST',
        'action' => Yii::app()->createUrl('site/agendarcita'),
        'id' => 'form',
        'enableClientValidation' => true,
        'enableAjaxValidation' => true,
        'clientOptions' => array(
            'validateOnSubmit' => true
        ),
    ));
    ?>

<div class="row" align="center">
    <?php echo $form->labelEx($model,'fecha'); ?>
    <?php
        $this->widget("zii.widgets.jui.CJuiDatePicker", array(
                "attribute" => "fecha",
                "model" => $model,
                "language" => "es",
                "options" => array(
                    "dateFormat"=>"yy-mm-dd",
                    'showButtonPanel' => true,
                    'changeYear' => true,
                  //  'changeMonth' => true,
                   // 'changeYear' => true,
                 'yearRange' => '-0:2',
                 'minDate' => '-0Y',
                 'maxDate' => '2Y',
                )
                ));
    ?>
    <?php echo $form->error($model,'fecha', array("class" => "text-error")); ?>
</div>

    <div class="row" align="center">
        <?php echo $form->labelEx($model,'hora'); ?>
        <?php echo $form->dropDownList($model,'hora', array(
                "1"=>"8:00", "2"=>"8:30",
                "3"=>"9:00", "4"=>"9:30",
                "5"=>"10:00","6"=>"10:30",
                "7"=>"11:00","8"=>"11:30",
                "9"=>"12:00", "10"=>"12:30",
                "11"=>"13:00", "12"=>"13:30",
                "13"=>"14:00", "14"=>"14:30",
                "15"=>"15:00", "16"=>"15:30",
                "17"=>"16:00", "18"=>"16:30",
                "19"=>"17:00", "20"=>"17:30",
        )); ?>
        <?php echo $form->error($model,'hora', array("class" => "text-error")); ?>
    </div>

    <div class="row buttons" align="center">

        <?php echo CHtml::submitButton('Agendar', array('class' => 'btn btn-primary')); ?>
    </div>



<?php $this->endWidget(); ?>
</div>
