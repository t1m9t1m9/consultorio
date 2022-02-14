<?php
/* @var $this CertificadosController */
/* @var $model Certificados */

$this->breadcrumbs=array(
	'Certificadoses'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Certificados', 'url'=>array('index')),
	array('label'=>'Create Certificados', 'url'=>array('create')),
	array('label'=>'View Certificados', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Certificados', 'url'=>array('admin')),
);
?>

<h1>Update Certificados <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>