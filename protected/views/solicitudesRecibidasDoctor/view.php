<?php
/* @var $this SolicitudesRecibidasDoctorController */
/* @var $model SolicitudesRecibidasDoctor */

$this->breadcrumbs=array(
	'Solicitudes'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de Solicitudes', 'url'=>array('index')),
	array('label'=>'Crear Solicitud', 'url'=>array('create')),
	array('label'=>'Actualizar Solicitud', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Solicitudes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Esta seguro que desa eliminar?')),
	array('label'=>'Administrar Solicitudes', 'url'=>array('admin')),
);
?>

<h1>Vista de Solicitud: <?php echo $model->nombre." ".$model->apellido; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'tipoSolicitud',
		'ciUsuario',
		'respuesta',
		'observaciones',
		'nombre',
		'apellido',
	),
)); ?>
