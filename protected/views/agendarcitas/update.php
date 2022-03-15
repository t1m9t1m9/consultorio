<?php
/* @var $this AgendarcitasController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Citas Agendadas', 'url'=>array('index')),
	array('label'=>'Crear Cita', 'url'=>array('create')),
	array('label'=>'Ver Citas Agendadas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administar Citas Agendadas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Cita Medica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>