<?php
/* @var $this SolicitudesrecibidasController */
/* @var $data Solicitudesrecibidas */
$cedu = Yii::app()->user->name;
?>

<div class="view">

	<b><?php
        if($cedu == $data->ciUsuario)
        {
        echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tipoSolicitud')); ?>:</b>
	<?php echo CHtml::encode($data->tipoSolicitud); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->ciUsuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('respuesta')); ?>:</b>
	<?php CHtml::encode($data->respuesta); if($data->respuesta == 0) echo "NO"; else echo "SI"; ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('observaciones')); ?>:</b>
	<?php echo CHtml::encode($data->observaciones); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre')); ?>:</b>
	<?php echo CHtml::encode($data->nombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('apellido')); ?>:</b>
	<?php echo CHtml::encode($data->apellido);?>
	<br />
<br><?php } ?>

</div>