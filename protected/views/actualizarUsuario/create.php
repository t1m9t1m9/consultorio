<?php
/* @var $this ActualizarUsuarioController */
/* @var $model ActualizarUsuario */

$this->breadcrumbs=array(
	'Actualizar Usuarios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ActualizarUsuario', 'url'=>array('index')),
	array('label'=>'Manage ActualizarUsuario', 'url'=>array('admin')),
);
?>

<h1>Create ActualizarUsuario</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>