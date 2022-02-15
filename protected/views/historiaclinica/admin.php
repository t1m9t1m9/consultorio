<?php
/* @var $this HistoriaclinicaController */
/* @var $model Historiaclinica */

$this->breadcrumbs=array(
	'Historias Clinicas'=>array('index'),
	'Administrar Historias Clinicas',
);

$this->menu=array(
	array('label'=>'Lista de Historias Clinicas', 'url'=>array('index')),
	array('label'=>'Crear Historia Clinica', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#historiaclinica-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Historias Clinicas</h1>


<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'historiaclinica-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id'
//		'fechaHistoria',
		'cedula',
		'apellidoPaterno',
//		'apellidoMaterno',
		'primerNombre',
		/*
		'segundoNombre',
		'direccion',
		'barrio',
		'canton',
		'provincia',
		'telefono',
		'fechaNacimiento',
		'lugarNacimiento',
		'nacionalidad',
		'grupoCultural',
		'edad',
		'sexo',
		'estadoCivil',
		'instruccionAprobada',
		'ocupacion',
		'historiaLaboralPasada',
		'convulsiones',
		'tosConFlemaConSangre',
		'fracturas',
		'cirugia',
		'alergia',
		'ira',
		'hospitalizacion',
		'otros',
		'hta',
		'cardiopatia',
		'hipotiroidismo',
		'Diabetes',
		'cancer',
		'epilepsia',
		'enfermedadPulmonar',
		'detalleAntecedentesPatologicos',
		'menarquia',
		'cm',
		'disminorrea',
		'fum',
		'planificacionFamiliar',
		'papanicolao',
		'ecoMamario',
		'mamografia',
		'gesta',
		'menopausia',
		'aborto',
		'ivs',
		'partos',
		'cesareas',
		'hv',
		'hm',
		'detalleginecoObstetriz',
		'fuma',
		'drogas',
		'alcohol',
		'parejasSexuales',
		'medicamentosHabituales',
		'detalleHabitosToxicos',
		'peso',
		'talla',
		'imc',
		'valnut',
		'ta',
		'fc',
		'fr',
		'sat',
		'detalleEnfermedadActual',
		'detalleExamenFisico',
		'diagnosticoClinico',
		'tratamiento',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
