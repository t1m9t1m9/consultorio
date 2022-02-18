<?php
/* @var $this AgendarcitasController */
/* @var $data Agenda */
?>

<div class="view">
    <br>
	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hora')); ?>:</b>
	<?php echo CHtml::encode($data->hora); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fecha')); ?>:</b>
	<?php echo CHtml::encode($data->fecha); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('confirmacion')); ?>:</b>
	<?php echo CHtml::encode($data->confirmacion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ciUsuario')); ?>:</b>
	<?php echo CHtml::encode($data->ciUsuario); ?>
	<br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('nombreCompleto')); ?>:</b>
    <?php echo CHtml::encode($data->nombreCompleto); ?>
    <br />
<br>

</div>