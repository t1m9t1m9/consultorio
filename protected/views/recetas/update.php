<?php
/* @var $this RecetasController */
/* @var $model Recetas */

$this->breadcrumbs=array(
	'Recetases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Recetas', 'url'=>array('index')),
	array('label'=>'Create Recetas', 'url'=>array('create')),
	array('label'=>'View Recetas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Recetas', 'url'=>array('admin')),
);
?>

<h1>Update Recetas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>