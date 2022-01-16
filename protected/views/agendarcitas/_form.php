<?php
/* @var $this AgendarcitasController */
/* @var $model Agenda */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'agenda-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'hora'); ?>
<!--		--><?php //echo $form->textField($model,'hora',array('size'=>6,'maxlength'=>6)); ?>
        <?php echo $form->dropDownList($model,'hora', array(
            "8:00"=>"8:00", "8:30"=>"8:30",
            "9:00"=>"9:00", "9:30"=>"9:30",
            "10:00"=>"10:00","10:30"=>"10:30",
            "11:00"=>"11:00","11:30"=>"11:30",
            "12:00"=>"12:00", "12:30"=>"12:30",
            "13:00"=>"13:00", "13:30"=>"13:30",
            "14:00"=>"14:00", "14:30"=>"14:30",
            "15:00"=>"15:00", "15:30"=>"15:30",
            "16:00"=>"16:00", "16:30"=>"16:30",
            "17:00"=>"17:00", "17:30"=>"17:30",
        )); ?>
		<?php echo $form->error($model,'hora'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fecha'); ?>
<!--		--><?php //echo $form->textField($model,'fecha'); ?>
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
		<?php echo $form->error($model,'fecha'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'confirmacion'); ?>
<!--		--><?php //echo $form->textField($model,'confirmacion',array('size'=>2,'maxlength'=>2)); ?>
        <?php echo $form->dropDownList($model,'confirmacion', array('SI' => 'SI', 'NO' => 'NO'),array('selected' => 'Choose')); ?>
		<?php echo $form->error($model,'confirmacion'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ciUsuario'); ?>
		<?php echo $form->textField($model,'ciUsuario',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'ciUsuario'); ?>

    <?php
    $cedu = Yii::app()->user->name;
    $cedulaActual = $model->ciUsuario;
    $nombre = Usuario::model()->findAll();
    $i1 = 1;

    foreach ($nombre as $infoPersonal)
    {
    if($cedulaActual == $ced[$i1++]="$infoPersonal->ci")
    {
        echo " ";echo " ";
        echo $infoPersonal->primerNombre." ". $infoPersonal->segundoNombre." ";
        echo $infoPersonal->primerApellido." ". $infoPersonal->segundoApellido;
    }
    }
    ?>
    </div>

        <br>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->