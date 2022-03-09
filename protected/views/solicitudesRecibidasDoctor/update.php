<?php
/* @var $this SolicitudesRecibidasDoctorController */
/* @var $model SolicitudesRecibidasDoctor */

$this->breadcrumbs=array(
	'Solicitudes'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar',
);

$this->menu=array(
	array('label'=>'Lista de Solicitudes', 'url'=>array('index')),
	array('label'=>'Crear Solicitud', 'url'=>array('create')),
	array('label'=>'Vista de Solicitudes', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Solicitudes', 'url'=>array('admin')),
);
?>

<h1>Actualizar Solicitud: <?php echo $model->nombre." ".$model->apellido; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>