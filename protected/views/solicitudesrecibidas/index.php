<?php
/* @var $this SolicitudesrecibidasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Solicitudesrecibidases',
);

$this->menu=array(
	array('label'=>'Create Solicitudesrecibidas', 'url'=>array('create')),
	array('label'=>'Manage Solicitudesrecibidas', 'url'=>array('admin')),
);
?>

<h1>Solicitudesrecibidases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
