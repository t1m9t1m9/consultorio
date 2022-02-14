<?php
/* @var $this CertificadosController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Certificadoses',
);

$this->menu=array(
	array('label'=>'Create Certificados', 'url'=>array('create')),
	array('label'=>'Manage Certificados', 'url'=>array('admin')),
);
?>

<h1>Certificadoses</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
