<?php

class ValidarRegistro extends CFormModel
{
    public $ci;
    public $nombre1;
    public $apellido1;
    public $email;
    public $password;
    public $repetir_password;

    public function rules()
    {
        return array(

            array('ci, nombre1, apellido1, email, password, repetir_password',
                  'required',
                  'message' => 'Este campo es requerido',
            ),

            array(
                'ci',
                'match',
                'pattern' => '/^[0-9]+$/i',
                'message' => 'Error, solo numeros.',
            ),
            array(
                'ci',
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
                'email',
                'email',
                'message' => 'El formato de email no es correcto'
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
                array('ci', 'comprobar_cedula')
        );
    }

    public function attributeLabels()
    {
        return array(
            'ci'=>'Cedula',
            'nombre1'=>'Primer Nombre',
            'apellido1'=>'Primer Apellido',
            'email'=>'Correo Electronico',
            'password'=>'Password',
            'repetir_password'=>'Repetir Password',
        );
    }

    public function comprobar_cedula($attributes, $params)
    {
        $conexion = Yii::app()->db;

        $consulta = "SELECT ci FROM usuario WHERE ";
        $consulta .= "ci='".$this->ci."'";

        $resultado = $conexion->createCommand($consulta);
        $filas = $resultado->query();

        foreach($filas as $fila)
        {
            if($this->ci === $fila['ci'])
            {
                $this->addError('ci', 'Su cedula ya se encuentra registrada');
                break;
            }
        }

    }

}