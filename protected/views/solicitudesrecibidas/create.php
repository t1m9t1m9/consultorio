<?php
/* @var $this SolicitudesrecibidasController */
/* @var $model Solicitudesrecibidas */

$this->breadcrumbs=array(
	'Solicitudesrecibidases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Solicitudesrecibidas', 'url'=>array('index')),
	array('label'=>'Manage Solicitudesrecibidas', 'url'=>array('admin')),
);
?>

<h1>Create Solicitudesrecibidas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>