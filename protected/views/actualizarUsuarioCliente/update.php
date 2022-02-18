<?php
/* @var $this ActualizarUsuarioClienteController */
/* @var $model ActualizarUsuario */

$this->breadcrumbs=array(
//	'Actualizar Usuarios'=>array('index'),
	$model->ci=>array('view','id'=>$model->ci),
	'Actualizar',
);

$this->menu=array(
//	array('label'=>'List ActualizarUsuario', 'url'=>array('index')),
//	array('label'=>'Create ActualizarUsuario', 'url'=>array('create')),
	array('label'=>'Resumen Informacion', 'url'=>array('view', 'id'=>$model->ci)),
//	array('label'=>'Manage ActualizarUsuario', 'url'=>array('admin')),
);
?>

<h2>Actualizar Informacion de : <?php echo $model->nombreCompleto; ?></h2>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>