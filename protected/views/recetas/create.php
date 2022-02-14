<?php
/* @var $this RecetasController */
/* @var $model Recetas */

$this->breadcrumbs=array(
	'Recetases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Recetas', 'url'=>array('index')),
	array('label'=>'Manage Recetas', 'url'=>array('admin')),
);
?>

<h1>Create Recetas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>