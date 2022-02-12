<?php

class SiteController extends Controller
{
    /**
     * Declares class-based actions.
     */
    public function actions()
    {
        return array(
            // captcha action renders the CAPTCHA image displayed on the contact page
            'captcha' => array(
                'class' => 'CCaptchaAction',
                'backColor' => 0xFFFFFF,
            ),
            // page action renders "static" pages stored under 'protected/views/site/pages'
            // They can be accessed via: index.php?r=site/page&view=FileName
            'page' => array(
                'class' => 'CViewAction',
            ),
        );
    }

    /**
     * This is the default 'index' action that is invoked
     * when an action is not explicitly requested by users.
     */
    public function actionIndex()
    {
        // renders the view file 'protected/views/site/index.php'
        // using the default layout 'protected/views/layouts/main.php'
        $this->render('index');
    }

    /**
     * This is the action to handle external exceptions.
     */
    public function actionError()
    {
        if ($error = Yii::app()->errorHandler->error) {
            if (Yii::app()->request->isAjaxRequest)
                echo $error['message'];
            else
                $this->render('error', $error);
        }
    }

    /**
     * Displays the contact page
     */
    public function actionContact()
    {
        $model = new ContactForm;
        if (isset($_POST['ContactForm'])) {
            $model->attributes = $_POST['ContactForm'];
            if ($model->validate()) {
                $name = '=?UTF-8?B?' . base64_encode($model->name) . '?=';
                $subject = '=?UTF-8?B?' . base64_encode($model->subject) . '?=';
                $headers = "From: $name <{$model->email}>\r\n" .
                    "Reply-To: {$model->email}\r\n" .
                    "MIME-Version: 1.0\r\n" .
                    "Content-Type: text/plain; charset=UTF-8";

                mail(Yii::app()->params['adminEmail'], $subject, $model->body, $headers);
                Yii::app()->user->setFlash('contact', 'Thank you for contacting us. We will respond to you as soon as possible.');
                $this->refresh();
            }
        }
        $this->render('contact', array('model' => $model));
    }

    /**
     * Displays the login page
     */
    public function actionLogin()
    {
        $model = new LoginForm;

        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'login-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        // collect user input data
        if (isset($_POST['LoginForm'])) {
            $model->attributes = $_POST['LoginForm'];
            // validate user input and redirect to the previous page if valid
            if ($model->validate() && $model->login())
                $this->redirect(Yii::app()->user->returnUrl);
        }
        // display the login form
        $this->render('login', array('model' => $model));
    }

    /**
     * Logs out the current user and redirect to homepage.
     */
    public function actionLogout()
    {
        Yii::app()->user->logout();
        $this->redirect(Yii::app()->homeUrl);
    }

    //REGISTRO DE USUARIO
    public function actionregistro()
    {
        $model = new ValidarRegistro;
        $msg = '';
//        $model->sexo = '1';
//        $model->etnia = '1';
        // if it is ajax validation request
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }

        if (isset($_POST['ValidarRegistro'])) {
            $model->attributes = $_POST['ValidarRegistro'];
            if (!$model->validate()) {
                $model->addError('repetir_password', 'Error al enviar el Formulario');
            } else {
                //Guardar el nuevo usuario en la base de datos
                $guardar = new ConsultasBD;
                $guardar->guardarUsuario(
                    $model->ci,
                    $model->nombre1,
                    $model->nombre2 = "",
                    $model->apellido1,
                    $model->apellido2 = "",
                    $model->edad = 0,
                    $model->sexo = 1,
                    $model->etnia = 1,
                    $model->email,
                    $model->celular = 0,
                    $model->direccion = "",
                    $model->pregunta1 = "",
                    $model->pregunta2 = "",
                    $model->pregunta3 = "",
                    $model->password
                );

                //Refrescar Pagina
                $model->ci = '';
                $model->nombre1 = '';
//                    $model->nombre2 = '';
                $model->apellido1 = '';
//                    $model->apellido2 = '';
//                    $model->edad = '';
//                    $model->sexo = '';
//                    $model->etnia = '';
                $model->email = '';
//                    $model->celular = '';
//                    $model->direccion = '';
//                    $model->pregunta1 = '';
//                    $model->pregunta2 = '';
//                    $model->pregunta3 = '';
                $model->password = '';
                $model->repetir_password = '';

                //Mensaje de confirmacion de registro
                $msg = 'Se registro exitosamente';
            }
        }
        $this->render('registro', array('model' => $model, 'msg' => $msg));
    }

    //valida una pagina para que solo se tenga acceso si estas logeado en el sistema
//    public function actionPanel()
//    {
//        if (Yii::app()->user->isGuest)
//        {
//            $this->redirect(Yii::app()->homeUrl);
//        }
//        else
//        {
//            $this->render('panel');
//        }
//    }

    public function actionRecuperarPassword()
    {
        $model = new RecuperarPassword;
        $msg = '';
        $msg1 = '';
        $password = '';

        if (isset($_POST["RecuperarPassword"])) {
            $model->attributes = $_POST['RecuperarPassword'];
            if (!$model->validate()) {
                $msg = "<strong class='text-error'>Error al enviar el formulario</strong>";
            } else {
                $conexion = Yii::app()->db;

                //Verificar si el usuario existe
                $consulta = "SELECT ci, email FROM usuario WHERE ";
                $consulta .= "ci='" . $model->username . "' AND email='$model->email'";

                $resultado = $conexion->createCommand($consulta);
                $filas = $resultado->query();
                $existe = false;

                foreach ($filas as $fila) {
                    $existe = true;
                }

                //si el usuario existe
                if ($existe === true) {
                    //buscar el password del usuario
                    $consulta = "SELECT password FROM usuario WHERE ";
                    $consulta .= "ci='" . $model->username . "' AND email='" . $model->email . "'";

                    $resultado = $conexion->createCommand($consulta)->query();

                    $resultado->bindColumn(1, $password);

                    while ($resultado->read() !== false) {
                        $actualizar1 = new ConsultasBD;
                        $actualizar1->actualizar_pass(
                            $model->username
                        );


                        $msg1 = 'Su contraseña es su numero de cedula, por favor ingrese y cambien su contraseña por seguridad';

                        //refrescar vista
                        $model->username = '';
                        $model->email = '';
                        $model->captcha = '';
                    }
                }
            }
        }
        $this->render('recuperarpassword', array('model' => $model, 'msg' => $msg, 'msg1' => $msg1));
    }

    public function actionAgendarCita()
    {
        if (Yii::app()->user->isGuest) {
            $this->redirect(Yii::app()->homeUrl);
        } else {
            $model = new AgendarCita;
            $msg = "";
            if (isset($_POST['ajax']) && $_POST['ajax'] === 'form') {
                echo CActiveForm::validate($model);
                Yii::app()->end();
            }
            if (isset($_POST['AgendarCita'])) {
                $model->attributes = $_POST['AgendarCita'];
                if (!$model->validate()) {
                    $model->addError('hora', 'Error al enviar el Formulario');
                } else {
                    //Guardar la cita en la base de datos
                    $guardar = new ConsultasBD;
                    $guardar->guardarCita(
                        $model->hora,
                        $model->fecha
                    );

                    //Refrescar Pagina
                    $model->hora = '';
                    //$model->fecha = '';
                    //Mensaje de confirmacion de registro
                    $msg = 'Se registro exitosamente su Cita, espera la confirmacion.';
                }
            }
            $this->render('agendarcita', array('model' => $model, 'msg' => $msg));
        }
    }

    public function actionCalendario()
    {
        if (Yii::app()->user->isGuest)
            $this->redirect(Yii::app()->homeUrl);
        else
            $this->render('calendario');
    }

    public function actionCalendarioDoctora()
    {
        if (Yii::app()->user->isGuest)
            $this->redirect(Yii::app()->homeUrl);
        else
            $this->render('calendarioDoctora');
    }
}

