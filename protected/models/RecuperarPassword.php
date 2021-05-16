<?php

class RecuperarPassword extends CFormModel
{
    public $username;
    public $email;
    public $captcha;

    public function rules()
    {
        return array(
                array(
                        'username, email, captcha',
                        'required',
                        'message' => 'El campo es requerido.',
                ),

                array(
                        'username',
                        'match',
                        'pattern' => '/^[0-9]+$/i',
                        'message' => 'Error, solo numeros.',
                ),

                 array(
                        'username',
                        'length',
                        'min' => 10,
                            'tooShort' => 'La cedula tiene 10 digitos',
                        'max' => 10,
                        'tooLong' => 'La cedula tiene 10 digitos',
                 ),

            array(
                    'email',
                    'email',
                    'message' => 'El formato de email no es correcto.',
            ),

            array(
                    'captcha',
                    'captcha',
                    'message' => 'Error, el codigo captcha no es valido.',
            ),
        );
    }

    public function attributeLabels()
    {
        return array(
                        'username' => "Usuario",
        );
    }
}