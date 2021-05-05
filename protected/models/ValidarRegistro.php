<?php

class ValidarRegistro extends CFormModel
{
    public $cedula;
    public $nombre1;
    public $nombre2;
    public $apellido1;
    public $apellido2;
    public $email;
    public $celular;
    public $direccion;
    public $respuesta1;
    public $respuesta2;
    public $respuesta3;
    public $password;
    public $repetir_password;
    public $edad;
    public $sexo;
    public $etnia;

    public function rules()
    {
        return array(

            array('cedula, nombre1, nombre2, apellido1, apellido2, 
                   edad, sexo, etnia, email, celular, direccion, 
                   respuesta1, respuesta2, respuesta3, password, 
                   repetir_password',
                  'required'
            ),

            array(
                'cedula',
                'match',
                'pattern' => '/^[0-9]+$/i',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'cedula',
                'length',
                'min' => 10,
                'tooShort' => 'La cedula tiene 10 digitos',
                'max' => 10,
                'tooLong' => 'La cedula tiene 10 digitos',
            ),

            array(
                'nombre1',
                'match',
                'pattern' => '/^[a-zA-Záéíóúñ\s]+$/i',
                'message' => 'Error, solo letras.',
            ),
            array(
                'nombre1',
                'length',
                'min' => 3,
                'tooShort' => 'Debe tener minimo 3 letras',
                'max' => 50,
                'tooLong' => 'El maximo de letras es 50',
            ),

            array(
                'nombre2',
                'match',
                'pattern' => '/^[a-zA-Záéíóúñ\s]+$/i',
                'message' => 'Error, solo letras.',
            ),
            array(
                'nombre2',
                'length',
                'min' => 3,
                'tooShort' => 'Debe tener minimo 3 letras',
                'max' => 50,
                'tooLong' => 'El maximo de letras es 50',
            ),

            array(
                'apellido1',
                'match',
                'pattern' => '/^[a-zA-Záéíóúñ\s]+$/i',
                'message' => 'Error, solo letras.',
            ),
            array(
                'apellido1',
                'length',
                'min' => 3,
                'tooShort' => 'Debe tener minimo 3 letras',
                'max' => 50,
                'tooLong' => 'El maximo de letras es 50',
            ),

            array(
                'apellido2',
                'match',
                'pattern' => '/^[a-zA-Záéíóúñ\s]+$/i',
                'message' => 'Error, solo letras.',
            ),
            array(
                'apellido2',
                'length',
                'min' => 3,
                'tooShort' => 'Debe tener minimo 3 letras',
                'max' => 50,
                'tooLong' => 'El maximo de letras es 50',
            ),

            array(
                'edad',
                'match',
                'pattern' => '/^[0-9]+$/i',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'edad',
                'length',
                'min' => 1,
                'tooShort' => 'Minimo un digito',
                'max' => 2,
                'tooLong' => 'Maximo dos digitos',
            ),


            array(
              'sexo',
              'match',
                'pattern' => '/^[0-9]/',
                'message' => 'El tipo de dato que quieres enviar es incorrecto',
            ),

            array(
                'etnia',
                'match',
                'pattern' => '/^[0-9]/',
                'message' => 'El tipo de dato que quieres enviar es incorrecto',
            ),

            array(
                'email',
                'email',
                'message' => 'El formato de email no es correcto'
            ),

            array(
                'celular',
                'length',
                'min' => 10,
                'tooShort' => 'El numero celular tiene 10 digitos',
                'max' => 10,
                'tooLong' => 'El numero celular tiene 10 digitos',
            ),

            array(
                'direccion',
                'match',
                'pattern' => '/^[a-z0-9áéíóúñ\s]+$/i',
                'message' => 'Error, solo letras, numeros y guiones',
            ),

            array(
                'respuesta1',
                'match',
                'pattern' => '/^[a-zA-Záéíóúñ\s]+$/i',
                'message' => 'Error, solo letras.',
            ),
            array(
                'respuesta1',
                'length',
                'min' => 3,
                'tooShort' => 'Debe tener minimo 3 letras',
                'max' => 50,
                'tooLong' => 'El maximo de letras es 32',
            ),

            array(
                'respuesta2',
                'match',
                'pattern' => '/^[a-zA-Záéíóúñ\s]+$/i',
                'message' => 'Error, solo letras.',
            ),
            array(
                'respuesta2',
                'length',
                'min' => 3,
                'tooShort' => 'Debe tener minimo 3 letras',
                'max' => 50,
                'tooLong' => 'El maximo de letras es 32',
            ),

            array(
                'respuesta3',
                'match',
                'pattern' => '/^[a-zA-Záéíóúñ\s]+$/i',
                'message' => 'Error, solo letras.',
            ),
            array(
                'respuesta3',
                'length',
                'min' => 3,
                'tooShort' => 'Debe tener minimo 3 letras',
                'max' => 50,
                'tooLong' => 'El maximo de letras es 32',
            ),

            array(
                'password',
                'match',
                'pattern' => '/^[a-z0-9áéíóúñ\_]+$/i',
                'message' => 'Error, solo letras, numeros y guiones bajos',
            ),
            array(
                'password',
                'length',
                'min' => 6,
                'tooShort' => 'Su contraseña debe tener minimo 8 caracteres',
                'max' => 60,
                'tooLong' => 'Su contraseña debe tener maximo 60 caracteres',
            ),

            array(
                'repetir_password',
                'compare',
                'compareAttribute' => 'password',
                'message' => 'El password no coincide',
            ),

        );
    }

    public function attributeLabels()
    {
        return array(
            'cedula'=>'Cedula',
            'nombre1'=>'Primer Nombre',
            'nombre2'=>'Segundo Nombre',
            'apellido1'=>'Primer Apellido',
            'apellido2'=>'Segundo Apellido',
            'email'=>'Correo Electronico',
            'celular'=>'Telefono Celular',
            'direccion'=>'Direccion',
            'respuesta1'=>'En que ciudad nacio?',
            'respuesta2'=>'Nombre de su mascota?',
            'respuesta3'=>'Libro favorito?',
            'password'=>'Password',
            'repetir_password'=>'Repetir Password',
            'edad'=>'Edad',
            'sexo'=>'Sexo',
            'etnia'=>'Etnia',
        );
    }
}