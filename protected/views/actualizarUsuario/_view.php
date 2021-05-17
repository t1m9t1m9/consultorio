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

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundoNombre')); ?>:</b>
	<?php echo CHtml::encode($data->segundoNombre); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('primerApellido')); ?>:</b>
	<?php echo CHtml::encode($data->primerApellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('segundoApellido')); ?>:</b>
	<?php echo CHtml::encode($data->segundoApellido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('edad')); ?>:</b>
	<?php echo CHtml::encode($data->edad); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sexo')); ?>:</b>
	<?php echo CHtml::encode($data->sexo); ?>
	<br />
<br>
	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('etnia')); ?>:</b>
	<?php echo CHtml::encode($data->etnia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('email')); ?>:</b>
	<?php echo CHtml::encode($data->email); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('celular')); ?>:</b>
	<?php echo CHtml::encode($data->celular); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('direccion')); ?>:</b>
	<?php echo CHtml::encode($data->direccion); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta1')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta2')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('pregunta3')); ?>:</b>
	<?php echo CHtml::encode($data->pregunta3); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	*/ ?>

</div>