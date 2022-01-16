<?php
/* @var $this HistoriaclinicaController */
/* @var $model Historiaclinica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'id'); ?>
<!--		--><?php //echo $form->textField($model,'id'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'fechaHistoria'); ?>
<!--		--><?php //echo $form->textField($model,'fechaHistoria'); ?>
<!--	</div>-->

	<div class="row">
		<?php echo $form->label($model,'cedula'); ?>
		<?php echo $form->textField($model,'cedula',array('size'=>10,'maxlength'=>10)); ?>
	</div>

<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'apellidoPaterno'); ?>
<!--		--><?php //echo $form->textField($model,'apellidoPaterno',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'apellidoMaterno'); ?>
<!--		--><?php //echo $form->textField($model,'apellidoMaterno',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'primerNombre'); ?>
<!--		--><?php //echo $form->textField($model,'primerNombre',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'segundoNombre'); ?>
<!--		--><?php //echo $form->textField($model,'segundoNombre',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->

<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'direccion'); ?>
<!--		--><?php //echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>120)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'barrio'); ?>
<!--		--><?php //echo $form->textField($model,'barrio',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'canton'); ?>
<!--		--><?php //echo $form->textField($model,'canton',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'provincia'); ?>
<!--		--><?php //echo $form->textField($model,'provincia',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'telefono'); ?>
<!--		--><?php //echo $form->textField($model,'telefono',array('size'=>10,'maxlength'=>10)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'fechaNacimiento'); ?>
<!--		--><?php //echo $form->textField($model,'fechaNacimiento'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'lugarNacimiento'); ?>
<!--		--><?php //echo $form->textField($model,'lugarNacimiento',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'nacionalidad'); ?>
<!--		--><?php //echo $form->textField($model,'nacionalidad',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'grupoCultural'); ?>
<!--		--><?php //echo $form->textField($model,'grupoCultural',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'edad'); ?>
<!--		--><?php //echo $form->textField($model,'edad'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'sexo'); ?>
<!--		--><?php //echo $form->textField($model,'sexo',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'estadoCivil'); ?>
<!--		--><?php //echo $form->textField($model,'estadoCivil',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'instruccionAprobada'); ?>
<!--		--><?php //echo $form->textField($model,'instruccionAprobada',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'ocupacion'); ?>
<!--		--><?php //echo $form->textField($model,'ocupacion',array('size'=>60,'maxlength'=>120)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'historiaLaboralPasada'); ?>
<!--		--><?php //echo $form->textField($model,'historiaLaboralPasada',array('size'=>60,'maxlength'=>120)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'convulsiones'); ?>
<!--		--><?php //echo $form->textField($model,'convulsiones'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'tosConFlemaConSangre'); ?>
<!--		--><?php //echo $form->textField($model,'tosConFlemaConSangre'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'fracturas'); ?>
<!--		--><?php //echo $form->textField($model,'fracturas'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'cirugia'); ?>
<!--		--><?php //echo $form->textField($model,'cirugia'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'alergia'); ?>
<!--		--><?php //echo $form->textField($model,'alergia'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'ira'); ?>
<!--		--><?php //echo $form->textField($model,'ira'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'hospitalizacion'); ?>
<!--		--><?php //echo $form->textField($model,'hospitalizacion'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'otros'); ?>
<!--		--><?php //echo $form->textField($model,'otros',array('size'=>60,'maxlength'=>300)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'hta'); ?>
<!--		--><?php //echo $form->textField($model,'hta'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'cardiopatia'); ?>
<!--		--><?php //echo $form->textField($model,'cardiopatia'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'hipotiroidismo'); ?>
<!--		--><?php //echo $form->textField($model,'hipotiroidismo'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'Diabetes'); ?>
<!--		--><?php //echo $form->textField($model,'Diabetes'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'cancer'); ?>
<!--		--><?php //echo $form->textField($model,'cancer'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'epilepsia'); ?>
<!--		--><?php //echo $form->textField($model,'epilepsia'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'enfermedadPulmonar'); ?>
<!--		--><?php //echo $form->textField($model,'enfermedadPulmonar'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'detalleAntecedentesPatologicos'); ?>
<!--		--><?php //echo $form->textField($model,'detalleAntecedentesPatologicos',array('size'=>60,'maxlength'=>300)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'menarquia'); ?>
<!--		--><?php //echo $form->textField($model,'menarquia'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'cm'); ?>
<!--		--><?php //echo $form->textField($model,'cm'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'disminorrea'); ?>
<!--		--><?php //echo $form->textField($model,'disminorrea'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'fum'); ?>
<!--		--><?php //echo $form->textField($model,'fum'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'planificacionFamiliar'); ?>
<!--		--><?php //echo $form->textField($model,'planificacionFamiliar',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'papanicolao'); ?>
<!--		--><?php //echo $form->textField($model,'papanicolao',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'ecoMamario'); ?>
<!--		--><?php //echo $form->textField($model,'ecoMamario',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'mamografia'); ?>
<!--		--><?php //echo $form->textField($model,'mamografia',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'gesta'); ?>
<!--		--><?php //echo $form->textField($model,'gesta',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'menopausia'); ?>
<!--		--><?php //echo $form->textField($model,'menopausia',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'aborto'); ?>
<!--		--><?php //echo $form->textField($model,'aborto',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'ivs'); ?>
<!--		--><?php //echo $form->textField($model,'ivs',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'partos'); ?>
<!--		--><?php //echo $form->textField($model,'partos',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'cesareas'); ?>
<!--		--><?php //echo $form->textField($model,'cesareas',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'hv'); ?>
<!--		--><?php //echo $form->textField($model,'hv',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'hm'); ?>
<!--		--><?php //echo $form->textField($model,'hm',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'detalleginecoObstetriz'); ?>
<!--		--><?php //echo $form->textField($model,'detalleginecoObstetriz',array('size'=>60,'maxlength'=>300)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'fuma'); ?>
<!--		--><?php //echo $form->textField($model,'fuma'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'drogas'); ?>
<!--		--><?php //echo $form->textField($model,'drogas',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'alcohol'); ?>
<!--		--><?php //echo $form->textField($model,'alcohol',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'parejasSexuales'); ?>
<!--		--><?php //echo $form->textField($model,'parejasSexuales',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'medicamentosHabituales'); ?>
<!--		--><?php //echo $form->textField($model,'medicamentosHabituales',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'detalleHabitosToxicos'); ?>
<!--		--><?php //echo $form->textField($model,'detalleHabitosToxicos',array('size'=>60,'maxlength'=>300)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'peso'); ?>
<!--		--><?php //echo $form->textField($model,'peso',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'talla'); ?>
<!--		--><?php //echo $form->textField($model,'talla',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'imc'); ?>
<!--		--><?php //echo $form->textField($model,'imc',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'valnut'); ?>
<!--		--><?php //echo $form->textField($model,'valnut',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'ta'); ?>
<!--		--><?php //echo $form->textField($model,'ta',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'fc'); ?>
<!--		--><?php //echo $form->textField($model,'fc',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'fr'); ?>
<!--		--><?php //echo $form->textField($model,'fr',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'sat'); ?>
<!--		--><?php //echo $form->textField($model,'sat',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'detalleEnfermedadActual'); ?>
<!--		--><?php //echo $form->textArea($model,'detalleEnfermedadActual',array('rows'=>6, 'cols'=>50)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'detalleExamenFisico'); ?>
<!--		--><?php //echo $form->textArea($model,'detalleExamenFisico',array('rows'=>6, 'cols'=>50)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'diagnosticoClinico'); ?>
<!--		--><?php //echo $form->textArea($model,'diagnosticoClinico',array('rows'=>6, 'cols'=>50)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'tratamiento'); ?>
<!--		--><?php //echo $form->textArea($model,'tratamiento',array('rows'=>6, 'cols'=>50)); ?>
<!--	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->