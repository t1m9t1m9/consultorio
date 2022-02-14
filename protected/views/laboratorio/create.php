<?php
/* @var $this LaboratorioController */
/* @var $model Laboratorio */

$this->breadcrumbs=array(
	'Laboratorios'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Laboratorio', 'url'=>array('index')),
	array('label'=>'Manage Laboratorio', 'url'=>array('admin')),
);
?>

<h1>Create Laboratorio</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>