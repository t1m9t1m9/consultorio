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

    public function actionActualizarInformacion()
    {
        $model = new ValidarRegistro;
        $msg = '';
        $cedula = Yii::app()->user->name;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['ValidarRegistro'])) {
            $model->attributes = $_POST['ValidarRegistro'];
            if (!$model->validate()) {
                $model->addError('ci', 'Error al enviar el Formulario');
            } else {
                //Guardar el nuevo usuario en la base de datos
                $guardar = new ConsultasBD;
                $guardar->actualizarUsuario(
                    $model->ci=$cedula,
                    $model->primerApellido,
                    $model->primerApellido,
                    $model->email
                );

                //Refrescar Pagina
//                $model->ci = '';
//                $model->nombre1 = '';
//                $model->apellido1 = '';
//                $model->email = '';

                //Mensaje de confirmacion de registro
                $msg = 'Se actualizo exitosamente';
            }
        }

        $this->render('actualizarInformacion',
            array('model' => $model,
//                'cedula' => $cedula,
//                'primerNombre'=> $primerNombre,
//                'primerApellido' => $primerApellido,
//                'email' => $email,
                'msg' => $msg
            ));
    }

}