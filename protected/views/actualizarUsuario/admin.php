<?php
/* @var $this ActualizarUsuarioController */
/* @var $model ActualizarUsuario */

$this->breadcrumbs=array(
	'Actualizar Usuarios'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Listado de Usuarios', 'url'=>array('index')),
	array('label'=>'Crear Usuario', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#actualizar-usuario-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Actualizar Usuarios</h1>

<!--<p>-->
<!--You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>-->
<!--or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.-->
<!--</p>-->

<?php echo CHtml::link('Busqueda Avanzada','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'actualizar-usuario-grid',
	'dataProvider'=>$model->search(),
//	'filter'=>$model,
	'columns'=>array(
		'ci',
		'primerNombre',
		'segundoNombre',
		'primerApellido',
		'segundoApellido',
		/*'edad',

		'sexo',
		'etnia',
		'email',
		'celular',
		'direccion',
		'pregunta1',
		'pregunta2',
		'pregunta3',
		'password',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
