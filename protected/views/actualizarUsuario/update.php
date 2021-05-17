<?php
/* @var $this ActualizarUsuarioController */
/* @var $model ActualizarUsuario */

$this->breadcrumbs=array(
	'Actualizar Usuarios'=>array('index'),
	$model->ci=>array('view','id'=>$model->ci),
	'Update',
);

$this->menu=array(
	array('label'=>'Lista de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
	array('label'=>'Vista de Usuarios', 'url'=>array('view', 'id'=>$model->ci)),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1>Actualizar Usuario <?php echo $model->ci; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>