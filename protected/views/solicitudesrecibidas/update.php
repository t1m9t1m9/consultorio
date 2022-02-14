<?php
/* @var $this SolicitudesrecibidasController */
/* @var $model Solicitudesrecibidas */

$this->breadcrumbs=array(
	'Solicitudesrecibidases'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Solicitudesrecibidas', 'url'=>array('index')),
	array('label'=>'Create Solicitudesrecibidas', 'url'=>array('create')),
	array('label'=>'View Solicitudesrecibidas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Solicitudesrecibidas', 'url'=>array('admin')),
);
?>

<h1>Update Solicitudesrecibidas <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>