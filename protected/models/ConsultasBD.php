<?php
class ConsultasBD
{
    public function guardarUsuario($cedula, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $edad, $sexo, $etnia, $email, $celular, $direccion, $pregunta1, $pregunta2, $pregunta3, $password)
    {
        $conexion = Yii::app()->db;
        $password = md5($password);
        $consulta = "INSERT INTO usuario(ci, primerNombre, segundoNombre, primerApellido, segundoApellido, edad, sexo, etnia, email, celular, direccion, pregunta1, pregunta2, pregunta3, password)";
        $consulta .= " VALUES ";
        $consulta .= "('$cedula', '$primerNombre', '$segundoNombre', '$primerApellido', '$segundoApellido', '$edad', '$sexo', '$etnia', '$email', '$celular', '$direccion', '$pregunta1', '$pregunta2', '$pregunta3', '$password')";
        $resultado = $conexion->createCommand($consulta)->execute();
    }
}