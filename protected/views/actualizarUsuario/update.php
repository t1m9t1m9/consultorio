<?php
/* @var $this ActualizarUsuarioController */
/* @var $model ActualizarUsuario */

$this->breadcrumbs=array(
	'Actualizar Usuarios'=>array('index'),
	$model->ci=>array('view','id'=>$model->ci),
	'Update',
);

$this->menu=array(
	array('label'=>'List ActualizarUsuario', 'url'=>array('index')),
	array('label'=>'Create ActualizarUsuario', 'url'=>array('create')),
	array('label'=>'View ActualizarUsuario', 'url'=>array('view', 'id'=>$model->ci)),
	array('label'=>'Manage ActualizarUsuario', 'url'=>array('admin')),
);
?>

<h1>Update ActualizarUsuario <?php echo $model->ci; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>