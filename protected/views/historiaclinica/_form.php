<?php
/* @var $this HistoriaclinicaController */
/* @var $model Historiaclinica */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'historiaclinica-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Los campos con <span class="required">*</span> son requeridos.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fechaHistoria'); ?>
<!--		--><?php //echo $form->textField($model,'fechaHistoria'); ?>
        <?php
        $this->widget("zii.widgets.jui.CJuiDatePicker", array(
            "attribute" => "fechaHistoria",
            "model" => $model,
            "language" => "es",
            "options" => array(
                "dateFormat"=>"yy-mm-dd",
                'showButtonPanel' => true,
//                'changeYear' => true,
//                  'changeMonth' => true,
//                 'changeYear' => true,
                'yearRange' => '-0:2',
                'minDate' => '-0Y',
                'maxDate' => '2Y',
            )
        ));
        ?>
		<?php echo $form->error($model,'fechaHistoria'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula'); ?>
		<?php echo $ced = $form->textField($model,'cedula',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cedula'); ?>
	</div>
    <?php echo "gfgfg".$ced;?>
	<div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'apellidoPaterno'); ?>
		<?php echo $form->textField($model,'apellidoPaterno',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'apellidoPaterno'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'apellidoMaterno'); ?>
		<?php echo $form->textField($model,'apellidoMaterno',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'apellidoMaterno'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'primerNombre'); ?>
		<?php echo $form->textField($model,'primerNombre',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'primerNombre'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'segundoNombre'); ?>
		<?php echo $form->textField($model,'segundoNombre',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'segundoNombre'); ?>
	</div>
    <div class="row"></div>
	<div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'direccion'); ?>
		<?php echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'direccion'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'barrio'); ?>
		<?php echo $form->textField($model,'barrio',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'barrio'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'canton'); ?>
		<?php echo $form->textField($model,'canton',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'canton'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'provincia'); ?>
		<?php echo $form->textField($model,'provincia',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'provincia'); ?>
	</div>
    <div class="row"></div>
	<div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'fechaNacimiento'); ?>
<!--		--><?php //echo $form->textField($model,'fechaNacimiento'); ?>
        <?php
        $this->widget("zii.widgets.jui.CJuiDatePicker", array(
            "attribute" => "fechaNacimiento",
            "model" => $model,
            "language" => "es",
            "options" => array(
                "dateFormat"=>"yy-mm-dd",
                'showButtonPanel' => true,
                'changeYear' => true,
                  'changeMonth' => true,
                 'changeYear' => true,
//                'yearRange' => '-0:2',
//                'minDate' => '-0Y',
                'maxDate' => '0Y',
            )
        ));
        ?>
        <?php echo $form->error($model,'fechaNacimiento'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'lugarNacimiento'); ?>
		<?php echo $form->textField($model,'lugarNacimiento',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'lugarNacimiento'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'nacionalidad'); ?>
		<?php echo $form->textField($model,'nacionalidad',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'nacionalidad'); ?>
	</div>
    <div class="row"></div>
	<div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'grupoCultural'); ?>
<!--		--><?php //echo $form->textField($model,'grupoCultural',array('size'=>32,'maxlength'=>32)); ?>
        <?php echo $form->dropDownList($model,'grupoCultural', array(
            "BLANCO"=>"BLANCO",
            "MESTIZO"=>"MESTIZO",
            "INDIGENA"=>"INDIGENA",
            "AFROECUATORIANO"=>"AFROECUATORIANO",
            "MONTUBIO"=>"MONTUBIO",
        )); ?>
		<?php echo $form->error($model,'grupoCultural'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'edad'); ?>
		<?php echo $form->textField($model,'edad'); ?>
		<?php echo $form->error($model,'edad'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'sexo'); ?>
<!--		--><?php //echo $form->textField($model,'sexo',array('size'=>32,'maxlength'=>32)); ?>
        <?php echo $form->dropDownList($model,'sexo', array(
            "MASCULINO"=>"MASCULINO",
            "FEMENINO"=>"FEMENINO",
        )); ?>
        <?php echo $form->error($model,'sexo'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'estadoCivil'); ?>
<!--		--><?php //echo $form->textField($model,'estadoCivil',array('size'=>32,'maxlength'=>32)); ?>
        <?php echo $form->dropDownList($model,'estadoCivil', array(
            "CASADO"=>"CASADO",
            "CASADA"=>"CASADA",
            "SOLTERO"=>"SOLTERO",
            "SOLTERA"=>"SOLTERA",
            "DIVORCIADO"=>"DIVORCIADO",
            "DIVORCIADA"=>"DIVORCIADA",
            "UNION LIBRE"=>"UNION LIBRE",
            "VIUDO"=>"VIUDO",
            "VIUDA"=>"VIUDA",
        )); ?>
		<?php echo $form->error($model,'estadoCivil'); ?>
	</div>
    <div class="row"></div>
	<div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'instruccionAprobada'); ?>
<!--		--><?php //echo $form->textField($model,'instruccionAprobada',array('size'=>32,'maxlength'=>32)); ?>
        <?php echo $form->dropDownList($model,'instruccionAprobada', array(
            "PREESCOLAR"=>"PREESCOLAR",
            "PRIMARIA"=>"PRIMARIA",
            "SECUNDARIA"=>"SECUNDARIA",
            "UNIVERSIDAD"=>"UNIVERSIDAD",
            "MAESTRIA"=>"MAESTRIA",
            "DOCTORADO"=>"DOCTORADO",
            "TECNICA"=>"TECNICA",
            "NINGUNA"=>"NINGUNA",
        )); ?>
		<?php echo $form->error($model,'instruccionAprobada'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'ocupacion'); ?>
		<?php echo $form->textField($model,'ocupacion',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'ocupacion'); ?>
	</div>

	<div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'historiaLaboralPasada'); ?>
		<?php echo $form->textField($model,'historiaLaboralPasada',array('size'=>60,'maxlength'=>120)); ?>
		<?php echo $form->error($model,'historiaLaboralPasada'); ?>
	</div>
    <div class="row"></div>
	<div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'convulsiones'); ?>
<!--		--><?php //echo $form->textField($model,'convulsiones'); ?>
        <?php echo $form->dropDownList($model,'convulsiones', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'convulsiones'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'tosConFlemaConSangre'); ?>
<!--		--><?php //echo $form->textField($model,'tosConFlemaConSangre'); ?>
        <?php echo $form->dropDownList($model,'tosConFlemaConSangre', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'tosConFlemaConSangre'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'fracturas'); ?>
<!--		--><?php //echo $form->textField($model,'fracturas'); ?>
        <?php echo $form->dropDownList($model,'fracturas', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'fracturas'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'cirugia'); ?>
<!--		--><?php //echo $form->textField($model,'cirugia'); ?>
        <?php echo $form->dropDownList($model,'cirugia', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'cirugia'); ?>
	</div>
    <div class="row"></div>
    <div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'alergia'); ?>
<!--		--><?php //echo $form->textField($model,'alergia'); ?>
        <?php echo $form->dropDownList($model,'alergia', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'alergia'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'ira'); ?>
<!--		--><?php //echo $form->textField($model,'ira'); ?>
        <?php echo $form->dropDownList($model,'ira', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'ira'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'hospitalizacion'); ?>
<!--		--><?php //echo $form->textField($model,'hospitalizacion'); ?>
        <?php echo $form->dropDownList($model,'hospitalizacion', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'hospitalizacion'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'otros'); ?>
		<?php echo $form->textField($model,'otros',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'otros'); ?>
	</div>
    <div class="row"></div>
    <div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'hta'); ?>
        <?php echo $form->dropDownList($model,'hta', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'hta'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'cardiopatia'); ?>
        <?php echo $form->dropDownList($model,'cardiopatia', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'cardiopatia'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'hipotiroidismo'); ?>
        <?php echo $form->dropDownList($model,'hipotiroidismo', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'hipotiroidismo'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'Diabetes'); ?>
        <?php echo $form->dropDownList($model,'Diabetes', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'Diabetes'); ?>
	</div>
    <div class="row"></div>
    <div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'cancer'); ?>
        <?php echo $form->dropDownList($model,'cancer', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'cancer'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'epilepsia'); ?>
        <?php echo $form->dropDownList($model,'epilepsia', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'epilepsia'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'enfermedadPulmonar'); ?>
        <?php echo $form->dropDownList($model,'enfermedadPulmonar', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'enfermedadPulmonar'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'detalleAntecedentesPatologicos'); ?>
		<?php echo $form->textField($model,'detalleAntecedentesPatologicos',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'detalleAntecedentesPatologicos'); ?>
	</div>
    <div class="row"></div>
    <div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'menarquia'); ?>
        <?php echo $form->dropDownList($model,'menarquia', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'menarquia'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'cm'); ?>
        <?php echo $form->dropDownList($model,'cm', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'cm'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'disminorrea'); ?>
        <?php echo $form->dropDownList($model,'disminorrea', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'disminorrea'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'fum'); ?>
        <?php echo $form->dropDownList($model,'fum', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'fum'); ?>
	</div>
    <div class="row"></div>
    <div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'planificacionFamiliar'); ?>
		<?php echo $form->textField($model,'planificacionFamiliar',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'planificacionFamiliar'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'papanicolao'); ?>
		<?php echo $form->textField($model,'papanicolao',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'papanicolao'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'ecoMamario'); ?>
		<?php echo $form->textField($model,'ecoMamario',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'ecoMamario'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'mamografia'); ?>
		<?php echo $form->textField($model,'mamografia',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'mamografia'); ?>
	</div>
    <div class="row"></div>
    <div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'gesta'); ?>
		<?php echo $form->textField($model,'gesta',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'gesta'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'menopausia'); ?>
		<?php echo $form->textField($model,'menopausia',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'menopausia'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'aborto'); ?>
		<?php echo $form->textField($model,'aborto',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'aborto'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'ivs'); ?>
		<?php echo $form->textField($model,'ivs',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'ivs'); ?>
	</div>
    <div class="row"></div>
    <div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'partos'); ?>
		<?php echo $form->textField($model,'partos',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'partos'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'cesareas'); ?>
        <?php echo $form->dropDownList($model,'cesareas', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'cesareas'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'hv'); ?>
        <?php echo $form->dropDownList($model,'hv', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'hv'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'hm'); ?>
        <?php echo $form->dropDownList($model,'hm', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'hm'); ?>
	</div>
    <div class="row"></div>
	<div class="row">
		<?php echo $form->labelEx($model,'detalleginecoObstetriz'); ?>
		<?php echo $form->textField($model,'detalleginecoObstetriz',array('style'=>'width:900px; height:20px;','size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'detalleginecoObstetriz'); ?>
	</div>
    <div class="row"></div>
    <div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'fuma'); ?>
        <?php echo $form->dropDownList($model,'fuma', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'fuma'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'drogas'); ?>
        <?php echo $form->dropDownList($model,'drogas', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'drogas'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'alcohol'); ?>
        <?php echo $form->dropDownList($model,'alcohol', array(
            "1"=>"SI",
            "0"=>"NO",
        )); ?>
		<?php echo $form->error($model,'alcohol'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'parejasSexuales'); ?>
		<?php echo $form->textField($model,'parejasSexuales',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'parejasSexuales'); ?>
	</div>
    <div class="row"></div>
	<div class="row">
		<?php echo $form->labelEx($model,'medicamentosHabituales'); ?>
		<?php echo $form->textField($model,'medicamentosHabituales',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'medicamentosHabituales'); ?>
	</div>
    <div class="row"></div>
    <div class="row">
		<?php echo $form->labelEx($model,'detalleHabitosToxicos'); ?>
		<?php echo $form->textField($model,'detalleHabitosToxicos',array('style'=>'width:900px; height:20px;','size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'detalleHabitosToxicos'); ?>
	</div>
    <div class="row"></div>
    <div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'peso'); ?>
		<?php echo $form->textField($model,'peso',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'peso'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'talla'); ?>
		<?php echo $form->textField($model,'talla',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'talla'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'imc'); ?>
		<?php echo $form->textField($model,'imc',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'imc'); ?>
	</div>
    <div class="row"></div>
    <div class="row" style = "float: left; display:inline-block; margin-top: 50px;">
		<?php echo $form->labelEx($model,'valnut'); ?>
		<?php echo $form->textField($model,'valnut',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'valnut'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'ta'); ?>
		<?php echo $form->textField($model,'ta',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'ta'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'fc'); ?>
		<?php echo $form->textField($model,'fc',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'fc'); ?>
	</div>

    <div class="row" style = "float: left; display:inline-block; margin-top: 50px; padding-left: 40px;">
		<?php echo $form->labelEx($model,'fr'); ?>
		<?php echo $form->textField($model,'fr',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'fr'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'sat'); ?>
		<?php echo $form->textField($model,'sat',array('size'=>32,'maxlength'=>32)); ?>
		<?php echo $form->error($model,'sat'); ?>
	</div>
    <div class="row"></div>
	<div class="row">
		<?php echo $form->labelEx($model,'detalleEnfermedadActual'); ?>
		<?php echo $form->textArea($model,'detalleEnfermedadActual',array('style'=>'width:900px; height:100px;')); ?>
		<?php echo $form->error($model,'detalleEnfermedadActual'); ?>
	</div>
    <div class="row"></div>
	<div class="row">
		<?php echo $form->labelEx($model,'detalleExamenFisico'); ?>
		<?php echo $form->textArea($model,'detalleExamenFisico',array('style'=>'width:900px; height:100px;')); ?>
		<?php echo $form->error($model,'detalleExamenFisico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'diagnosticoClinico'); ?>
		<?php echo $form->textArea($model,'diagnosticoClinico',array('style'=>'width:900px; height:100px;')); ?>
		<?php echo $form->error($model,'diagnosticoClinico'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'tratamiento'); ?>
		<?php echo $form->textArea($model,'tratamiento',array('style'=>'width:900px; height:100px;')); ?>
		<?php echo $form->error($model,'tratamiento'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Guardar'); ?>

	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->