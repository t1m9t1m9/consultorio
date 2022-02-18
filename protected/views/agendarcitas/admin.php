<?php
/* @var $this AgendarcitasController */
/* @var $model Agenda */

$this->breadcrumbs=array(
	'Agendas'=>array('index'),
	'Administrar Citas Medicas',
);

$this->menu=array(
	array('label'=>'Lista de Citas Agendadas', 'url'=>array('index')),
	array('label'=>' Administrar Citas Agendadas', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#agenda-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1 align="center">Administrar Citas Agendadas</h1>

<?php echo CHtml::link('','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'agenda-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
//		'id',
		'hora',
		'fecha',
		'confirmacion',
		'ciUsuario',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
