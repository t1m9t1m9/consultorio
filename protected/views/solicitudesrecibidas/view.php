<?php
/* @var $this SolicitudesrecibidasController */
/* @var $model Solicitudesrecibidas */

$this->breadcrumbs=array(
	'Solicitudesrecibidases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Solicitudesrecibidas', 'url'=>array('index')),
	array('label'=>'Create Solicitudesrecibidas', 'url'=>array('create')),
	array('label'=>'Update Solicitudesrecibidas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Solicitudesrecibidas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Solicitudesrecibidas', 'url'=>array('admin')),
);
?>

<h1>View Solicitudesrecibidas #<?php echo $model->id; ?></h1>

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
