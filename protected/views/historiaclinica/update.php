<?php
/* @var $this HistoriaclinicaController */
/* @var $model Historiaclinica */

$this->breadcrumbs=array(
	'HistoriaS Clinicas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actualizar Historias Clinicas',
);

$this->menu=array(
	array('label'=>'Lista de Historias Clinicas', 'url'=>array('index')),
	array('label'=>'Crear Historia Clinica', 'url'=>array('create')),
	array('label'=>'Vista de Historias Clinicas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administrar Historias Clinicas', 'url'=>array('admin')),
);
?>

<h1>Actualizar Historia Clinica #<?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>