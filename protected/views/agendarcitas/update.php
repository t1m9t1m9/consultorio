<?php
/* @var $this AgendarcitasController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Actulizar',
);

$this->menu=array(
	array('label'=>'Lista de Citas Agendadas', 'url'=>array('index')),
	array('label'=>'Crear Cita', 'url'=>array('create')),
	array('label'=>'Ver Citas Agendadas', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Administar Citas Agendadas', 'url'=>array('admin')),
);
?>

<h1>Update Agenda <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>