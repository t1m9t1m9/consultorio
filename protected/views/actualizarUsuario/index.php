<?php
/* @var $this ActualizarUsuarioController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Actualizar Usuarios',
);

$this->menu=array(
	array('label'=>'Crear Usuarios', 'url'=>array('create')),
	array('label'=>'Administrar Usuarios', 'url'=>array('admin')),
);
?>

<h1 align="center">Actualizar Usuarios</h1>

    <?php $this->widget('zii.widgets.CListView', array(
        'dataProvider'=>$dataProvider,
        'itemView'=>'_view',
    )); ?>

