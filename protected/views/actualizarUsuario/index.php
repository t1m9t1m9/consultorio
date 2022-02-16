<?php
/* @var $this ActualizarUsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Actualizar Usuarios',
);

$this->menu=array(
	array('label'=>'Create ActualizarUsuario', 'url'=>array('create')),
	array('label'=>'Manage ActualizarUsuario', 'url'=>array('admin')),
);
?>

<h1>Actualizar Usuarios</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
