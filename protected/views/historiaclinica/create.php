<?php
/* @var $this HistoriaclinicaController */
/* @var $model Historiaclinica */

$this->breadcrumbs=array(
	'Historias Clinicas'=>array('index'),
	'Crear Historias Clinicas',
);

$this->menu=array(
	array('label'=>'Lista de Historias Clinicas', 'url'=>array('index')),
	array('label'=>'Administrar Historias Clinicas', 'url'=>array('admin')),
);
?>

<h1>Create Historia Clinica</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>