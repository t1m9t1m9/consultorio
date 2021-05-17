<?php

class UsuarioController extends Controller
{
    public function filters()
    {
        return array('accessControl');
    }
    public function accessRules()
    {
        return array(
                        array(
                            'deny',
                            'actions' => array('configuracion'),
                            'users' => array('?'),
                        ),

                        array(
                            'deny',
                            'actions' => array('actualizarInformacion'),
                            'users' => array('?'),
                        ),
        );
    }

    public function actionConfiguracion()
	{
        $model = new CambiarPassword;
        $msg = '';

        if(isset($_POST["CambiarPassword"]))
        {
            $model->attributes = $_POST["CambiarPassword"];
            if(!$model->validate())
            {
                $msg = "<strong class='text-error'>Error al enviar el formulario</strong>";
            }
            else
            {
                //consulta a la bdd
                $conexion = Yii::app()->db;
                //nombre de usuario
                $cedula = Yii::app()->user->name;

                $consulta = "UPDATE usuario SET ";
                $consulta .= "password='".md5($model->nuevo_password)."'";
                $consulta .= "WHERE ci='".$cedula."'";

                $resultado = $conexion->createCommand($consulta)->execute();

                if($resultado)
                {
                    $msg = "<strong class='text-info'>Su password a sido actualizada</strong>";
                }
                else
                {
                    $msg = "<strong class='text-info'>Error, no se a podido cambiar el password</strong>";
                }
                $model->password = '';
                $model->nuevo_password = '';
                $model->repetir_nuevo_password = '';
            }
        }
        $this->render('configuracion', array('model' => $model, 'msg' => $msg));
    }

//    public function actionActualizarInformacion()
//    {
//        $model = new ValidarRegistro;
//        $idUsuario = Usuario::model()->findAll();
//        $cedula = Yii::app()->user->name;
//        foreach ($idUsuario as $valores)
//        {
//            if ($cedula === $valores->ci)
//            {
//                $primerNombre = $valores->primerNombre;
//                $segundoNombre = $valores->segundoNombre;
//                $primerApellido = $valores->primerApellido;
//                $segundoApellido = $valores->segundoApellido;
//                $edad = $valores->edad;
//                if($valores->sexo == 1)
//                {$sexo = "MASCULINO";}
//                if($valores->sexo == 2)
//                {$sexo = "FEMENINO";}
//                if($valores->etnia == 1)
//                {$etnia = "BLANCO";}
//                if($valores->etnia == 2)
//                {$etnia = "MESTIZO";}
//                if($valores->etnia == 3)
//                {$etnia = "INDIGENA";}
//                if($valores->etnia == 4)
//                {$etnia = "AFROECUATORIANO";}
//                if($valores->etnia == 5)
//                {$etnia = "MONTUBIO";}
//                $celular = $valores->celular;
//                $email = $valores->email;
//                $direccion = $valores->direccion;
//                $pregunta1 = $valores->pregunta1;
//                $pregunta2 = $valores->pregunta2;
//                $pregunta3 = $valores->pregunta3;
//            }
//        }
//        $this->render('actualizarInformacion',
//            array('model' => $model,
//                'cedula' => $cedula,
//                'primerNombre'=> $primerNombre,
//                'segundoNombre' => $segundoNombre,
//                'primerApellido' => $primerApellido,
//                'segundoApellido' => $segundoApellido,
//                'edad' => $edad,
//                'sexo' => $sexo,
//                'etnia' => $etnia,
//                'celular' => $celular,
//                'email' => $email,
//                'direccion' => $direccion,
//                'pregunta1' => $pregunta1,
//                'pregunta2' => $pregunta2,
//                'pregunta3' => $pregunta3,
//            ));
//    }

}