<?php
/* @var $this HistoriaclinicaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Historias Clinicas',
);

$this->menu=array(
	array('label'=>'Crear Historia Clinica', 'url'=>array('create')),
	array('label'=>'Gestionar Historias Clinicas', 'url'=>array('admin')),
);
?>

<h1 align="center">Historias Clinicas</h1>

<?php
$dataProvider->pagination->pageSize = 5;
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));?>
