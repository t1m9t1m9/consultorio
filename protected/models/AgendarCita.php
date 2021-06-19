<?php


class AgendarCita extends CFormModel
{
    public $fecha;
    public $hora;
    public function rules()
    {
        return array(
            array(
                'fecha, hora',
                'required',
                'message' => 'El campo es requerido',
            ),
        );
    }
}