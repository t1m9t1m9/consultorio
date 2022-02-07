<?php
/* @var $this AgendarcitasController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'Lista de Citas Agendadas', 'url'=>array('index')),
	array('label'=>'Crear Cita Medica', 'url'=>array('create')),
	array('label'=>'Actualizar Cita Agendada', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Eliminar Cita Agendada', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Esta seguro de borrar?')),
	array('label'=>'Administrar Citas Agendadas', 'url'=>array('admin')),
);
?>

<h1>View Agenda #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'hora',
		'fecha',
		'confirmacion',
		'ciUsuario',
	),
)); ?>
