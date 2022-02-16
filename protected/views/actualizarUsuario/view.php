<?php
/* @var $this ActualizarUsuarioController */
/* @var $model ActualizarUsuario */

$this->breadcrumbs=array(
	'Actualizar Usuarios'=>array('index'),
	$model->ci,
);

$this->menu=array(
	array('label'=>'List ActualizarUsuario', 'url'=>array('index')),
	array('label'=>'Create ActualizarUsuario', 'url'=>array('create')),
	array('label'=>'Update ActualizarUsuario', 'url'=>array('update', 'id'=>$model->ci)),
	array('label'=>'Delete ActualizarUsuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ci),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ActualizarUsuario', 'url'=>array('admin')),
);
?>

<h1>View ActualizarUsuario #<?php echo $model->ci; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ci',
		'primerNombre',
		'primerApellido',
		'email',
		'password',
		'nombreCompleto',
	),
)); ?>
