<?php
/* @var $this SolicitudesRecibidasDoctorController */
/* @var $model SolicitudesRecibidasDoctor */

$this->breadcrumbs=array(
	'Solicitudes'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Lista de Solicitudes', 'url'=>array('index')),
	array('label'=>'Administrar Solicitudes', 'url'=>array('admin')),
);
?>

<h1>Crear Solicitud</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>