<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */
$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array('Login',);
?>
<h1 class="text-center" style="color:dodgerblue">Login</h1>
<p class="text-center">Por favor llene los campos con sus credenciales de inicio:</p>
<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array('validateOnSubmit'=>true,),
)); ?>
	<p class="note text-center">Los campos con <span class="required">*</span> son requeridos.</p>
	<div class="row text-center">
		<?php echo $form->labelEx($model,'username'); ?>
		<?php echo $form->textField($model,'username'); ?>
		<?php echo $form->error($model,'username', array("class" => "text-error")); ?>
	</div>
	<div class="row text-center">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password'); ?>
		<?php echo $form->error($model,'password', array("class" => "text-error")); ?>
	</div>
	<div class="row buttons text-center">
		<?php echo CHtml::submitButton('Ingresar', array('class'=>'btn btn-primary')); ?>
        <br><br><a href="<?php echo Yii::app()->createUrl('site/recuperarpassword'); ?>">
                   <center>Recuperar Password</center> </a>
</div>
<?php $this->endWidget(); ?>
</div><!-- form -->
