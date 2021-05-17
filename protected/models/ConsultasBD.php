<?php
class ConsultasBD
{
    public function guardarUsuario($cedula, $primerNombre, $segundoNombre, $primerApellido, $segundoApellido, $edad, $sexo, $etnia, $email, $celular, $direccion, $pregunta1, $pregunta2, $pregunta3, $password)
    {
        if($sexo == 1)
            $sexo = 'MASCULINO';
        if($sexo == 2)
            $sexo = 'FEMENINO';
        if($etnia == 1)
            $etnia = 'BLANCO';
        if($etnia == 2)
            $etnia = 'MESTIZO';
        if($etnia == 3)
            $etnia = 'INDIGENA';
        if($etnia == 4)
            $etnia = 'AFROECUATORIANO';
        if($etnia == 5)
            $etnia = 'MONTUBIO';

        $primerNombre = strtoupper($primerNombre);
        $segundoNombre = strtoupper($segundoNombre);
        $primerApellido = strtoupper($primerApellido);
        $segundoApellido = strtoupper($segundoApellido);
        $direccion = strtoupper($direccion);
        $pregunta1 = strtoupper($pregunta1);
        $pregunta2 = strtoupper($pregunta2);
        $pregunta3 = strtoupper($pregunta3);

        $conexion = Yii::app()->db;
        $password = md5($password);
        $consulta = "INSERT INTO usuario(ci, primerNombre, segundoNombre, primerApellido, segundoApellido, edad, sexo, etnia, email, celular, direccion, pregunta1, pregunta2, pregunta3, password)";
        $consulta .= " VALUES ";
        $consulta .= "('$cedula', '$primerNombre', '$segundoNombre', '$primerApellido', '$segundoApellido', '$edad', '$sexo', '$etnia', '$email', '$celular', '$direccion', '$pregunta1', '$pregunta2', '$pregunta3', '$password')";
        $resultado = $conexion->createCommand($consulta)->execute();
    }

    public function actualizar_pass($password)
    {
        $conexion = Yii::app()->db;
        $pass_md5 = md5($password);
        $consulta = "UPDATE usuario SET password='$pass_md5' WHERE ci='$password'";
        $resultado = $conexion->createCommand($consulta)->execute();
    }

}