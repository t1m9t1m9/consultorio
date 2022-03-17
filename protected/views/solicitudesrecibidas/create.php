<?php
/* @var $this SolicitudesrecibidasController */
/* @var $model Solicitudesrecibidas */

$this->breadcrumbs=array(
//	'Solicitudesrecibidases'=>array('index'),
	'Crear Solicitud',
);

$this->menu=array(
	array('label'=>'Lista de Solicitudes', 'url'=>array('index')),
//	array('label'=>'Manage Solicitudesrecibidas', 'url'=>array('admin')),
);
?>

<h1>CREAR SOLICITUD</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>