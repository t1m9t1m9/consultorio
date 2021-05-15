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

    <?php
    echo Yii::app()->bootstrap->registerAllCss();
    echo Yii::app()->bootstrap->registerCoreScripts();
    ?>

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
<!--                <button type="button" class="btn btn-navbar" data-toogle="collapse" data-target=".nav-collapse">-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                    <span class="icon-bar"></span>-->
<!--                </button>-->
                <button class="btn btn-navbar" type="button" data-toggle="collapse" data-target=".nav-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<!--                    <span class="navbar-toggler-icon"></span>-->
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="brand" href="<?php echo Yii::app()->homeUrl; ?>">
                    <?php echo CHtml::encode(Yii::app()->name); ?>
                </a>

                <div class="nav-collapse collapse">

		<?php
        if($posision != '0') {
		$this->widget('zii.widgets.CMenu',array(

			'items'=>array(
				array('label'=>'Inicio', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                array('label'=>'Panel de Control', 'url'=>array('/site/panel'), 'visible'=>!Yii::app()->user->isGuest),
                array('label'=>'Logout (' . $nom[$posision] . " " . $ape[$posision] . ')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
            'htmlOptions' => array('class' => 'nav navbar-nav'),
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
                    array('label'=>'Panel de Control', 'url'=>array('/site/panel'), 'visible'=>!Yii::app()->user->isGuest),
				    array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
                ),
                'htmlOptions' => array('class' => 'nav navbar-nav'),
            ));
        }
        ?>
                </div>
                </div>
                </div>
	</div><!-- mainmenu -->

<div class="container">
<div class="page-header">
    <br /><br />
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
</div>
	<?php echo $content; ?>

		<div class="footer text-center">
		Copyright &copy; <?php echo date('Y'); ?> by Liz Jurado.<br/>
		All Rights Reserved.<br/>
		<?php echo Yii::powered(); ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
