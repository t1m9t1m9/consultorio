<?php
/* @var $this AgendarcitasController */
/* @var $model Agenda */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'id'); ?>
<!--		--><?php //echo $form->textField($model,'id'); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'hora'); ?>
<!--		--><?php //echo $form->textField($model,'hora',array('size'=>6,'maxlength'=>6)); ?>
<!--	</div>-->
<!---->
<!--	<div class="row">-->
<!--		--><?php //echo $form->label($model,'fecha'); ?>
<!--		--><?php //echo $form->textField($model,'fecha'); ?>
<!--	</div>-->
<!---->
<!--    <div class="row">-->
<!--		--><?php //echo $form->label($model,'confirmacion'); ?>
<!--		--><?php //echo $form->textField($model,'confirmacion',array('size'=>2,'maxlength'=>2)); ?>
<!--	</div>-->

	<div class="row">
		<?php echo $form->label($model,'ciUsuario'); ?>
		<?php echo $form->textField($model,'ciUsuario',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->