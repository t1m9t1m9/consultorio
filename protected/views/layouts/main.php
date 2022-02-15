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
                <button class="btn btn-navbar" type="button" data-toggle="collapse" data-target=".nav-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <a class="brand" href="<?php echo Yii::app()->homeUrl; ?>">
                    <?php echo CHtml::encode(Yii::app()->name); ?>
                </a>

                <div class="nav-collapse collapse">

		<?php
		if ($cedu != '1803087558')//Numero de cedula del administrador
        {
            if ($posision != '0') {
                $this->widget('bootstrap.widgets.TbMenu', array(

                    'items' => array(
                        array('label' => 'Registro', 'url' => array('/site/registro'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Menu', 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                array('label' => 'Agendar Cita', 'url' => array('/site/agendarcita')),
                                array('label' => 'Calendario', 'url' => array('/site/calendario')),
                                array('label' => 'Recetas'),
                                array('label' => 'Pedidos',
                                    'items' => array(
                                            array('label' => 'Imagenes'),
                                        array('label' => 'Laboratorio'),
                                    )
                                    ),
                                array('label' => 'Certificados'),
                            ),
                        ),
                        array('label' => 'Panel de Control', 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                array('label' => 'Cambiar Password', 'url' => array('/usuario/configuracion')),
                            ),
                        ),
                        array('label' => 'Logout (' . $nom[$posision] . " " . $ape[$posision] . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
                    ),
                    'htmlOptions' => array('class' => 'nav navbar-nav'),
                ));
            } else {
                $this->widget('bootstrap.widgets.TbMenu', array(

                    'items' => array(
                        array('label' => 'Registro', 'url' => array('/site/registro'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                        array('label' => 'Menu', 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                array('label' => 'Agendar Cita', 'url' => array('/site/agendarcita')),
                                array('label' => 'Recetas'),
                                array('label' => 'Pedidos',
                                    'items' => array(
                                        array('label' => 'Imagenes'),
                                        array('label' => 'Laboratorio'),
                                    )
                                ),
                                array('label' => 'Certificados'),
                            ),
                        ),
                        array('label' => 'Panel de Control', 'visible' => !Yii::app()->user->isGuest,
                            'items' => array(
                                array('label' => 'Cambiar Password', 'url' => array('/usuario/configuracion')),
                            ),
                        ),
                    ),
                    'htmlOptions' => array('class' => 'nav navbar-nav'),
                ));
            }
        }
		else
        {//MENU DE Administrador
            $this->widget('bootstrap.widgets.TbMenu', array(

                'items' => array(

                    array('label' => 'Solicitudes', 'visible' => !Yii::app()->user->isGuest,
                        'items' => array(
                            array('label' => 'Revisar Solicitudes Recibidas', 'url' => array('/solicitudesrecibidas/index')),
                            array('label' => 'Subir Recetas', 'url' => array('/recetas/index')),
                            array('label' => 'Subir Pedidos',
                                'items' => array(
                                    array('label' => 'Imagenes', 'url' => array('/imagenes/index')),
                                    array('label' => 'Laboratorio', 'url' => array('/laboratorio/index')),
                                )
                            ),
                            array('label' => 'Subir Certificados', 'url' => array('/certificados/index')),
                        ),
                    ),

                    array('label' => 'Registro', 'url' => array('/site/registro'), 'visible' => Yii::app()->user->isGuest),
                    array('label' => 'Login', 'url' => array('/site/login'), 'visible' => Yii::app()->user->isGuest),
                    array('label' => 'Menu', 'visible' => !Yii::app()->user->isGuest,
                        'items' => array(
                            array('label' => 'Calendario', 'url' => array('/site/calendarioDoctora')),
                            array('label' => 'Historia Clinica', 'url' => array('/historiaclinica/index')),
                            array('label' => 'Agendar Cita', 'url' => array('/agendarcitas/index')),
                        ),
                    ),
                    array('label' => 'Panel de Control', 'visible' => !Yii::app()->user->isGuest,
                        'items' => array(
                            array('label' => 'Cambiar Password', 'url' => array('/usuario/configuracion')),
                            array('label' => 'Actualizar y Crear Usuarios', 'url' => array('/actualizarUsuario/admin')),
                                        ),
                        ),
                    array('label' => 'Logout (' . $nom[$posision] . " " . $ape[$posision] . ')', 'url' => array('/site/logout'), 'visible' => !Yii::app()->user->isGuest)
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
    <br />
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>
</div>
	<?php echo $content; ?>

<!--		<div class="footer text-center">-->
<!--		Copyright &copy; --><?php //echo date('Y'); ?><!-- by Liz Jurado.<br/>-->
<!--		All Rights Reserved.<br/>-->
<!--		--><?php //echo Yii::powered(); ?>
<!--	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
