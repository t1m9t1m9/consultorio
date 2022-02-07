<?php
/* @var $this AgendarcitasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Agendas',
);

$this->menu=array(
	array('label'=>'Crear Cita Medica', 'url'=>array('create')),
	array('label'=>'Administrar Citas Agendadas', 'url'=>array('admin')),
);
?>

<h1>Agendas</h1>

<?php
$dataProvider->pagination->pageSize = 5;
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
