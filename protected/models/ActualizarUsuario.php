<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $ci
 * @property string $primerNombre
 * @property string $primerApellido
 * @property string $email
 * @property string $password
 * @property string $nombreCompleto
 */
class ActualizarUsuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ci, primerNombre, primerApellido, email, password', 'required','message' => 'Este campo es requerido'),
			array('ci', 'length', 'max'=>10, 'min'=>10),
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
                'primerNombre',
                'match',
                'pattern' => '/^[a-zA-Záéíóúñ\s]+$/i',
                'message' => 'Error, solo letras.',
            ),
            array(
                'primerApellido',
                'match',
                'pattern' => '/^[a-zA-Záéíóúñ\s]+$/i',
                'message' => 'Error, solo letras.',
            ),
			array('primerNombre, primerApellido', 'length', 'max'=>32),
			array('email, password', 'length', 'max'=>128),
            array('email', 'email','message' => 'El formato de email no es correcto'),
			array('nombreCompleto', 'length', 'max'=>100),
//            array('ci', 'comprobar_cedula'),
            array('ci', 'validar_cedula'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ci, primerNombre, primerApellido, email, password, nombreCompleto', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ci' => 'Cedula',
			'primerNombre' => 'Nombre',
			'primerApellido' => 'Apellido',
			'email' => 'Email',
			'password' => 'Password',
			'nombreCompleto' => 'Nombre Completo',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ci',$this->ci,true);
		$criteria->compare('primerNombre',$this->primerNombre,true);
		$criteria->compare('primerApellido',$this->primerApellido,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nombreCompleto',$this->nombreCompleto,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ActualizarUsuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

//    public function comprobar_cedula($attributes, $params)
//    {
//        $conexion = Yii::app()->db;
//
//        $consulta = "SELECT ci FROM usuario WHERE ";
//        $consulta .= "ci='".$this->ci."'";
//
//        $resultado = $conexion->createCommand($consulta);
//        $filas = $resultado->query();
//
//        foreach($filas as $fila)
//        {
//            if($this->ci === $fila['ci'])
//            {
//                $this->addError('ci', 'Su cedula ya se encuentra registrada');
//                break;
//            }
//
//        }
//
//    }

    public function validar_cedula($attributes, $params)
    {
        $cedulaActual = $this->ci;
        if(empty($cedulaActual))
        {
            $this->addError('ci', 'El campo no puede estar vacio');
        }
        else {
            $verificar = intval($cedulaActual[9]);
            $a1 = intval($cedulaActual[0]) * 2;
            if ($a1 >= 10)
                $a1 = $a1 - 9;
            $a2 = intval($cedulaActual[1]);;
            $a3 = intval($cedulaActual[2]) * 2;;
            if ($a3 >= 10)
                $a3 = $a3 - 9;
            $a4 = intval($cedulaActual[3]);;
            $a5 = intval($cedulaActual[4]) * 2;
            if ($a5 >= 10)
                $a5 = $a5 - 9;
            $a6 = intval($cedulaActual[5]);
            $a7 = intval($cedulaActual[6]) * 2;
            if ($a7 >= 10)
                $a7 = $a7 - 9;
            $a8 = intval($cedulaActual[7]);
            $a9 = intval($cedulaActual[8]) * 2;
            if ($a9 >= 10)
                $a9 = $a9 - 9;
            $suma = $a1 + $a2 + $a3 + $a4 + $a5 + $a6 + $a7 + $a8 + $a9;
            $digitoFinal = substr($suma, 1, 1);
            if ($digitoFinal == 0)
                $digitoVerificador = 0;
            else
                $digitoVerificador = 10 - $digitoFinal;

            if ($digitoVerificador === $verificar) {
            } else {
                $this->addError('ci', 'Cedula incorrecta');
            }
        }
    }
}
