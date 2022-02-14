<?php
/* @var $this CertificadosController */
/* @var $model Certificados */

$this->breadcrumbs=array(
	'Certificadoses'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Certificados', 'url'=>array('index')),
	array('label'=>'Manage Certificados', 'url'=>array('admin')),
);
?>

<h1>Create Certificados</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>