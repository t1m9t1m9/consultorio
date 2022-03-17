<?php
/* @var $this SolicitudesrecibidasController */
/* @var $model Solicitudesrecibidas */

$this->breadcrumbs=array(
	'Solicitudes'=>array('index'),
	$model->nombre ." ".$model->apellido,
);

$this->menu=array(
	array('label'=>'Lista de Solicitudes', 'url'=>array('index')),
//	array('label'=>'Create Solicitudesrecibidas', 'url'=>array('create')),
	array('label'=>'Actualizar Solicitud', 'url'=>array('update', 'id'=>$model->id)),
//	array('label'=>'Delete Solicitudesrecibidas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Solicitudesrecibidas', 'url'=>array('admin')),
);
?>

<h1>VISTA DE SOLICITUD: <?php echo $model->nombre." ".$model->apellido; ?></h1>

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
