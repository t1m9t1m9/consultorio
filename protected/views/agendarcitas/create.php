<?php
/* @var $this AgendarcitasController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	'Crear Citas Medicas',
);

$this->menu=array(
	array('label'=>'Lista de Citas Agendadas', 'url'=>array('index')),
	array('label'=>'Administrar Citas Agendadas', 'url'=>array('admin')),
);
?>

<h1>Crear Cita</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>