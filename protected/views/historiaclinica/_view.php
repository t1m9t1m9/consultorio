<?php
/* @var $this HistoriaclinicaController */
/* @var $data Historiaclinica */
?>

<div class="view">
<br>
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('fechaHistoria')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->fechaHistoria); ?>
<!--	<br />-->

	<b><?php echo CHtml::encode($data->getAttributeLabel('cedula')); ?>:</b>
	<?php echo CHtml::encode($data->cedula); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('primerNombre')); ?>:</b>
    <?php echo CHtml::encode($data->primerNombre); ?>
    <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellidoPaterno')); ?>:</b>
	<?php echo CHtml::encode($data->apellidoPaterno); ?>
	<br />

<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('apellidoMaterno')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->apellidoMaterno); ?>
<!--	<br />-->



<!--	<b>--><?php //echo CHtml::encode($data->getAttributeLabel('segundoNombre')); ?><!--:</b>-->
<!--	--><?php //echo CHtml::encode($data->segundoNombre); ?>
<!--	<br />-->
<br>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('barrio')); ?>:</b>
	<?php echo CHtml::encode($data->barrio); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('canton')); ?>:</b>
	<?php echo CHtml::encode($data->canton); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('provincia')); ?>:</b>
	<?php echo CHtml::encode($data->provincia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->fechaNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('lugarNacimiento')); ?>:</b>
	<?php echo CHtml::encode($data->lugarNacimiento); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nacionalidad')); ?>:</b>
	<?php echo CHtml::encode($data->nacionalidad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('grupoCultural')); ?>:</b>
	<?php echo CHtml::encode($data->grupoCultural); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad')); ?>:</b>
	<?php echo CHtml::encode($data->edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('estadoCivil')); ?>:</b>
	<?php echo CHtml::encode($data->estadoCivil); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('instruccionAprobada')); ?>:</b>
	<?php echo CHtml::encode($data->instruccionAprobada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ocupacion')); ?>:</b>
	<?php echo CHtml::encode($data->ocupacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('historiaLaboralPasada')); ?>:</b>
	<?php echo CHtml::encode($data->historiaLaboralPasada); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('convulsiones')); ?>:</b>
	<?php echo CHtml::encode($data->convulsiones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tosConFlemaConSangre')); ?>:</b>
	<?php echo CHtml::encode($data->tosConFlemaConSangre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fracturas')); ?>:</b>
	<?php echo CHtml::encode($data->fracturas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cirugia')); ?>:</b>
	<?php echo CHtml::encode($data->cirugia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alergia')); ?>:</b>
	<?php echo CHtml::encode($data->alergia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ira')); ?>:</b>
	<?php echo CHtml::encode($data->ira); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hospitalizacion')); ?>:</b>
	<?php echo CHtml::encode($data->hospitalizacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('otros')); ?>:</b>
	<?php echo CHtml::encode($data->otros); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hta')); ?>:</b>
	<?php echo CHtml::encode($data->hta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cardiopatia')); ?>:</b>
	<?php echo CHtml::encode($data->cardiopatia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hipotiroidismo')); ?>:</b>
	<?php echo CHtml::encode($data->hipotiroidismo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Diabetes')); ?>:</b>
	<?php echo CHtml::encode($data->Diabetes); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cancer')); ?>:</b>
	<?php echo CHtml::encode($data->cancer); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('epilepsia')); ?>:</b>
	<?php echo CHtml::encode($data->epilepsia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('enfermedadPulmonar')); ?>:</b>
	<?php echo CHtml::encode($data->enfermedadPulmonar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalleAntecedentesPatologicos')); ?>:</b>
	<?php echo CHtml::encode($data->detalleAntecedentesPatologicos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menarquia')); ?>:</b>
	<?php echo CHtml::encode($data->menarquia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cm')); ?>:</b>
	<?php echo CHtml::encode($data->cm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('disminorrea')); ?>:</b>
	<?php echo CHtml::encode($data->disminorrea); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fum')); ?>:</b>
	<?php echo CHtml::encode($data->fum); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('planificacionFamiliar')); ?>:</b>
	<?php echo CHtml::encode($data->planificacionFamiliar); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('papanicolao')); ?>:</b>
	<?php echo CHtml::encode($data->papanicolao); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ecoMamario')); ?>:</b>
	<?php echo CHtml::encode($data->ecoMamario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('mamografia')); ?>:</b>
	<?php echo CHtml::encode($data->mamografia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gesta')); ?>:</b>
	<?php echo CHtml::encode($data->gesta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menopausia')); ?>:</b>
	<?php echo CHtml::encode($data->menopausia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('aborto')); ?>:</b>
	<?php echo CHtml::encode($data->aborto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ivs')); ?>:</b>
	<?php echo CHtml::encode($data->ivs); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('partos')); ?>:</b>
	<?php echo CHtml::encode($data->partos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cesareas')); ?>:</b>
	<?php echo CHtml::encode($data->cesareas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hv')); ?>:</b>
	<?php echo CHtml::encode($data->hv); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hm')); ?>:</b>
	<?php echo CHtml::encode($data->hm); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalleginecoObstetriz')); ?>:</b>
	<?php echo CHtml::encode($data->detalleginecoObstetriz); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fuma')); ?>:</b>
	<?php echo CHtml::encode($data->fuma); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('drogas')); ?>:</b>
	<?php echo CHtml::encode($data->drogas); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('alcohol')); ?>:</b>
	<?php echo CHtml::encode($data->alcohol); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('parejasSexuales')); ?>:</b>
	<?php echo CHtml::encode($data->parejasSexuales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('medicamentosHabituales')); ?>:</b>
	<?php echo CHtml::encode($data->medicamentosHabituales); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalleHabitosToxicos')); ?>:</b>
	<?php echo CHtml::encode($data->detalleHabitosToxicos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('peso')); ?>:</b>
	<?php echo CHtml::encode($data->peso); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('talla')); ?>:</b>
	<?php echo CHtml::encode($data->talla); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('imc')); ?>:</b>
	<?php echo CHtml::encode($data->imc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('valnut')); ?>:</b>
	<?php echo CHtml::encode($data->valnut); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ta')); ?>:</b>
	<?php echo CHtml::encode($data->ta); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fc')); ?>:</b>
	<?php echo CHtml::encode($data->fc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fr')); ?>:</b>
	<?php echo CHtml::encode($data->fr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sat')); ?>:</b>
	<?php echo CHtml::encode($data->sat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalleEnfermedadActual')); ?>:</b>
	<?php echo CHtml::encode($data->detalleEnfermedadActual); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detalleExamenFisico')); ?>:</b>
	<?php echo CHtml::encode($data->detalleExamenFisico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('diagnosticoClinico')); ?>:</b>
	<?php echo CHtml::encode($data->diagnosticoClinico); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tratamiento')); ?>:</b>
	<?php echo CHtml::encode($data->tratamiento); ?>
	<br />

	*/ ?>

</div>