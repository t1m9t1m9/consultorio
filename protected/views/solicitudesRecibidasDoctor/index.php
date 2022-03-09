<?php
/* @var $this SolicitudesRecibidasDoctorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solicitudes',
);

$this->menu=array(
	array('label'=>'Crear Solicitud', 'url'=>array('create')),
	array('label'=>'Administrar Solicitudes', 'url'=>array('admin')),
);
?>

<h1>Solicitudes Recibidas</h1>

<?php
$dataProvider->pagination->pageSize = 5;
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
