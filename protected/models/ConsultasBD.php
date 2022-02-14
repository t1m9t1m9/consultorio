<?php
class ConsultasBD
{
    public function guardarUsuario($cedula, $primerNombre, $primerApellido, $email, $password)
    {
        $primerNombre = strtoupper($primerNombre);
        $primerApellido = strtoupper($primerApellido);

        $conexion = Yii::app()->db;
        $password = md5($password);
        $consulta = "INSERT INTO usuario(ci, primerNombre, primerApellido, email, password)";
        $consulta .= " VALUES ";
        $consulta .= "('$cedula', '$primerNombre', '$primerApellido', '$email', '$password')";
        $resultado = $conexion->createCommand($consulta)->execute();
    }

    public function actualizarUsuario($cedula, $primerNombre, $primerApellido, $email)
    {
        $primerNombre = strtoupper($primerNombre);
        $primerApellido = strtoupper($primerApellido);

        $conexion = Yii::app()->db;
        $consulta = "UPDATE usuario SET primerNombre='$primerNombre', primerApellido='$primerApellido', email='$email' WHERE ci='$cedula' ";
        $resultado = $conexion->createCommand($consulta)->execute();
    }

    public function actualizar_pass($password)
    {
        $conexion = Yii::app()->db;
        $pass_md5 = md5($password);
        $consulta = "UPDATE usuario SET password='$pass_md5' WHERE ci='$password'";
        $resultado = $conexion->createCommand($consulta)->execute();
    }

    public function guardarCita($hora, $fecha)
    {
        $conexion = Yii::app()->db;
        if ($hora == '1')
            $hora = "08:00";
        if ($hora == '2')
            $hora = "08:30";
        if ($hora == '3')
            $hora = "09:00";
        if ($hora == '4')
            $hora = "09:30";
        if ($hora == '5')
            $hora = "10:00";
        if ($hora == '6')
            $hora = "10:30";
        if ($hora == '7')
            $hora = "11:00";
        if ($hora == '8')
            $hora = "11:30";
        if ($hora == '9')
            $hora = "12:00";
        if ($hora == '10')
            $hora = "12:30";
        if ($hora == '11')
            $hora = "13:00";
        if ($hora == '12')
            $hora = "13:30";
        if ($hora == '13')
            $hora = "14:00";
        if ($hora == '14')
            $hora = "14:30";
        if ($hora == '15')
            $hora = "15:00";
        if ($hora == '16')
            $hora = "15:30";
        if ($hora == '17')
            $hora = "16:00";
        if ($hora == '18')
            $hora = "16:30";
        if ($hora == '19')
            $hora = "17:00";
        if ($hora == '20')
            $hora = "17:30";
        $ci = Yii::app()->user->name;
        $consulta = "INSERT INTO agenda(id, hora, fecha, confirmacion, ciUsuario)";
        $consulta .= " VALUES ";
        $consulta .= "(NULL,'$hora', '$fecha', 'NO', '$ci')";
        $resultado = $conexion->createCommand($consulta)->execute();
    }

}