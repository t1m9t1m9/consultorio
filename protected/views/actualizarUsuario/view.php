<?php
/* @var $this ActualizarUsuarioController */
/* @var $model ActualizarUsuario */

$this->breadcrumbs=array(
	'Actualizar Usuarios'=>array('index'),
	$model->ci,
);

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->ci)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ci),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Ver Usuario #<?php echo $model->ci; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ci',
		'primerNombre',
		'primerApellido',
		'email',
		'password',
	),
)); ?>
