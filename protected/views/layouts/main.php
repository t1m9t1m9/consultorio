<?php /* @var $this Controller */
//@todo Configurar bootstrap y nav bar para crear menus contextuales
$cedu=Yii::app()->user->name;
$idusu = Usuario::model()->findAll();
$i1 = 1;
$posision = 0;
foreach($idusu as $idusuced)
{
    if($cedu == $ced[$i1++]="$idusuced->ci")
    {
        $posision=$i1;
    }
    $nom[$i1]="$idusuced->primerNombre";
    $ape[$i1]="$idusuced->primerApellido";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta name="language" content="en">

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print">
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection">
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css">
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainmenu">

		<?php
        if($posision != '0') {
		$this->widget('zii.widgets.CMenu',array(

			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
//				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
//                array('label'=>'Logout ()', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
               array('label'=>'Logout (' . $nom[$posision] . " " . $ape[$posision] . ')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),

		));
        }
        else
        {
            $this->widget('zii.widgets.CMenu',array(

                'items'=>array(
                    array('label'=>'Inicio', 'url'=>array('/site/index')),
                    array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                    array('label'=>'Contact', 'url'=>array('/site/contact')),
                    array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
//                    array('label'=>'Logout ()', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                    // array('label'=>'Logout (' . $nom[$posision] . " " . $ape[$posision] . ')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),

            ));
        }
        ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by Liz Jurado.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
