<?php
/* @var $this HistoriaclinicaController */
/* @var $model Historiaclinica */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'cedula'); ?>
		<?php echo $form->textField($model,'cedula',array('size'=>10,'maxlength'=>10)); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->