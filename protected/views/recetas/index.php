<?php
/* @var $this RecetasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Recetases',
);

$this->menu=array(
	array('label'=>'Create Recetas', 'url'=>array('create')),
	array('label'=>'Manage Recetas', 'url'=>array('admin')),
);
?>

<h1>Recetases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
