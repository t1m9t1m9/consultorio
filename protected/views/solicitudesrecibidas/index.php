<?php
/* @var $this SolicitudesrecibidasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solicitudesrecibidases',
);

$this->menu=array(
	array('label'=>'Crear Solicitud', 'url'=>array('create')),
//	array('label'=>'Manage Solicitudesrecibidas', 'url'=>array('admin')),
);
?>

<h1>Solicitudes Creadas</h1>

<?php
$dataProvider->pagination->pageSize = 5;
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

