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
			array('ci, primerNombre, primerApellido, email, password', 'required'),
            array('ci', 'length', 'max'=>10),
			array('primerNombre, primerApellido', 'length', 'max'=>32),
			array('email', 'length', 'max'=>128),
            array('email', 'email', 'message' => 'El formato de email no es correcto'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ci, primerNombre, primerApellido, email, password', 'safe', 'on'=>'search'),
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
			'primerNombre' => 'Primer Nombre',
			'primerApellido' => 'Primer Apellido',
			'email' => 'Email',
            'password' => 'Password'
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
        $criteria->compare('password',$this->password, true);

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
}
