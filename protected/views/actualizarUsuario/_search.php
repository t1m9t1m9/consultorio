<?php
/* @var $this ActualizarUsuarioController */
/* @var $model ActualizarUsuario */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'Cedula de Identidad'); ?>
		<?php echo $form->textField($model,'ci',array('size'=>10,'maxlength'=>10)); ?>
	</div>

<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'primerNombre'); ?>
<!--		--><?php //echo $form->textField($model,'primerNombre',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'segundoNombre'); ?>
<!--		--><?php //echo $form->textField($model,'segundoNombre',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'primerApellido'); ?>
<!--		--><?php //echo $form->textField($model,'primerApellido',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'segundoApellido'); ?>
<!--		--><?php //echo $form->textField($model,'segundoApellido',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'edad'); ?>
<!--		--><?php //echo $form->textField($model,'edad'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'sexo'); ?>
<!--		--><?php //echo $form->textField($model,'sexo',array('size'=>12,'maxlength'=>12)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'etnia'); ?>
<!--		--><?php //echo $form->textField($model,'etnia',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'email'); ?>
<!--		--><?php //echo $form->textField($model,'email',array('size'=>60,'maxlength'=>128)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'celular'); ?>
<!--		--><?php //echo $form->textField($model,'celular',array('size'=>10,'maxlength'=>10)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'direccion'); ?>
<!--		--><?php //echo $form->textField($model,'direccion',array('size'=>60,'maxlength'=>128)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'pregunta1'); ?>
<!--		--><?php //echo $form->textField($model,'pregunta1',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'pregunta2'); ?>
<!--		--><?php //echo $form->textField($model,'pregunta2',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'pregunta3'); ?>
<!--		--><?php //echo $form->textField($model,'pregunta3',array('size'=>32,'maxlength'=>32)); ?>
<!--	</div>-->

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->