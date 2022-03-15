<?php
/* @var $this SolicitudesrecibidasController */
/* @var $model Solicitudesrecibidas */

$this->breadcrumbs=array(
	'Solicitudesrecibidases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
    array('label'=>'Lista de Solicitude', 'url'=>array('index')),
	array('label'=>'Crear Solicitud', 'url'=>array('create')),
	array('label'=>'Ver Solicitud', 'url'=>array('view', 'id'=>$model->id)),
//	array('label'=>'Manage Solicitudesrecibidas', 'url'=>array('admin')),
);
?>

<h1>Update Solicitudesrecibidas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>