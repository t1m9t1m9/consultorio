<?php
/* @var $this CertificadosController */
/* @var $model Certificados */

$this->breadcrumbs=array(
	'Certificadoses'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Certificados', 'url'=>array('index')),
	array('label'=>'Create Certificados', 'url'=>array('create')),
	array('label'=>'Update Certificados', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Certificados', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Esta seguro de que desea elimiar este usuario?')),
	array('label'=>'Manage Certificados', 'url'=>array('admin')),
);
?>

<h1>View Certificados #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'fecha',
		'archivo',
		'ciUsuario',
	),
)); ?>
