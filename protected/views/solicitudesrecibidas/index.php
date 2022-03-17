<?php
/* @var $this SolicitudesrecibidasController */
/* @var $dataProvider CActiveDataProvider */
$cedu = Yii::app()->user->name;
$datos = Usuario::model()->findAll();
foreach ($datos as $nombres)
{
    if($cedu == $nombres->ci)
    {
        $nombre=$nombres->primerNombre;
        $apellido=$nombres->primerApellido;
    }
}
$this->breadcrumbs=array(
	'Solicitudes',
);

$this->menu=array(
	array('label'=>'Crear Solicitud', 'url'=>array('create')),
//	array('label'=>'Manage Solicitudesrecibidas', 'url'=>array('admin')),
);
?>

<h2>SOLICITUDES CREADAS DE: <?php echo $nombre." ".$apellido; ?></h2>

<?php
//$dataProvider->pagination->pageSize = 5;
$this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

