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
                array('ci', 'comprobar_cedula'),
                array('ci', 'validar_cedula')
        );
    }

    public function attributeLabels()
    {
        return array(
            'ci'=>'Cedula',
            'nombre1'=>'Nombre',
            'apellido1'=>'Apellido',
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

    public function validar_cedula($attributes, $params)
    {
        $cedulaActual = $this->ci;
        $verificar = intval($cedulaActual[9]);
        $a1=intval($cedulaActual[0])*2;
        if($a1 >= 10)
            $a1=$a1-9;
        $a2=intval($cedulaActual[1]);;
        $a3=intval($cedulaActual[2])*2;;
        if($a3 >= 10)
            $a3=$a3-9;
        $a4=intval($cedulaActual[3]);;
        $a5=intval($cedulaActual[4])*2;
        if($a5 >= 10)
            $a5=$a5-9;
        $a6=intval($cedulaActual[5]);
        $a7=intval($cedulaActual[6])*2;
        if($a7 >= 10)
            $a7=$a7-9;
        $a8=intval($cedulaActual[7]);
        $a9=intval($cedulaActual[8])*2;
        if($a9 >= 10)
            $a9=$a9-9;
        $suma = $a1+$a2+$a3+$a4+$a5+$a6+$a7+$a8+$a9;
        $digitoFinal = substr($suma,1,1);
        if ($digitoFinal == 0)
            $digitoVerificador = 0;
        else
            $digitoVerificador = 10 - $digitoFinal;

        if ($digitoVerificador === $verificar)
        {

        }
        else
        {
            $this->addError('ci', 'Cedula incorrecta');

        }

    }
}