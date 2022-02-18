<?php
/* @var $this ActualizarUsuarioController */
/* @var $model ActualizarUsuario */

$this->breadcrumbs=array(
	'Actualizar Usuarios'=>array('index'),
	$model->ci,
);

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Actualizar Usuario', 'url'=>array('update', 'id'=>$model->ci)),
	array('label'=>'Eliminar Usuario', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ci),'confirm'=>'Esta seguro que desea eliminar este usuario?')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Actualizacion de Usuario: <?php echo $model->nombreCompleto; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ci',
        'nombreCompleto',
//		'primerNombre',
//		'primerApellido',
		'email',
		'password',
	),
)); ?>
