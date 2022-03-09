<?php
/* @var $this SolicitudesrecibidasController */
/* @var $model Solicitudesrecibidas */

$this->breadcrumbs=array(
//	'Solicitudesrecibidases'=>array('index'),
	'Crear Solicitud',
);

//$this->menu=array(
//	array('label'=>'List Solicitudesrecibidas', 'url'=>array('index')),
//	array('label'=>'Manage Solicitudesrecibidas', 'url'=>array('admin')),
//);
?>

<h1>Crear Solicitud</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>