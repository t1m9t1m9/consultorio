<?php
/* @var $this ActualizarUsuarioController */
/* @var $data ActualizarUsuario */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ci')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ci), array('view', 'id'=>$data->ci)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primerNombre')); ?>:</b>
	<?php echo CHtml::encode($data->primerNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primerApellido')); ?>:</b>
	<?php echo CHtml::encode($data->primerApellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />
    <br>

</div>