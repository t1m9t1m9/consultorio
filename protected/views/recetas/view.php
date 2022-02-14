<?php
/* @var $this RecetasController */
/* @var $model Recetas */

$this->breadcrumbs=array(
	'Recetases'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Recetas', 'url'=>array('index')),
	array('label'=>'Create Recetas', 'url'=>array('create')),
	array('label'=>'Update Recetas', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Recetas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Recetas', 'url'=>array('admin')),
);
?>

<h1>View Recetas #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'archivo',
		'ciUsuario',
	),
)); ?>
