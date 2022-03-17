<?php
/* @var $this SolicitudesrecibidasController */
/* @var $model Solicitudesrecibidas */

$this->breadcrumbs=array(
	'Solicitudesrecibidases'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Solicitudesrecibidas', 'url'=>array('index')),
	array('label'=>'Create Solicitudesrecibidas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#solicitudesrecibidas-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Administrar Solicitudes</h1>


<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'solicitudesrecibidas-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'tipoSolicitud',
		'ciUsuario',
		'respuesta',
		'observaciones',
		'nombre',
		/*
		'apellido',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
