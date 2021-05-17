<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $ci
 * @property string $primerNombre
 * @property string $segundoNombre
 * @property string $primerApellido
 * @property string $segundoApellido
 * @property integer $edad
 * @property string $sexo
 * @property string $etnia
 * @property string $email
 * @property string $celular
 * @property string $direccion
 * @property string $pregunta1
 * @property string $pregunta2
 * @property string $pregunta3
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
			array('ci, primerNombre, segundoNombre, primerApellido, segundoApellido, edad, sexo, etnia, email, celular, direccion, pregunta1, pregunta2, pregunta3, password', 'required'),
			array('edad', 'numerical', 'integerOnly'=>true),
			array('ci, celular', 'length', 'max'=>10),
			array('primerNombre, segundoNombre, primerApellido, segundoApellido, etnia, pregunta1, pregunta2, pregunta3', 'length', 'max'=>32),
			array('sexo', 'length', 'max'=>12),
			array('email, direccion, password', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ci, primerNombre, segundoNombre, primerApellido, segundoApellido, edad, sexo, etnia, email, celular, direccion, pregunta1, pregunta2, pregunta3, password', 'safe', 'on'=>'search'),
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
			'ci' => 'Ci',
			'primerNombre' => 'Primer Nombre',
			'segundoNombre' => 'Segundo Nombre',
			'primerApellido' => 'Primer Apellido',
			'segundoApellido' => 'Segundo Apellido',
			'edad' => 'Edad',
			'sexo' => 'Sexo',
			'etnia' => 'Etnia',
			'email' => 'Email',
			'celular' => 'Celular',
			'direccion' => 'Direccion',
			'pregunta1' => 'Ciudad donde Nacio',
			'pregunta2' => 'Nombre de su Mascota',
			'pregunta3' => 'Libro Favorito',
			'password' => 'Password',
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
		$criteria->compare('segundoNombre',$this->segundoNombre,true);
		$criteria->compare('primerApellido',$this->primerApellido,true);
		$criteria->compare('segundoApellido',$this->segundoApellido,true);
		$criteria->compare('edad',$this->edad);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('etnia',$this->etnia,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('celular',$this->celular,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('pregunta1',$this->pregunta1,true);
		$criteria->compare('pregunta2',$this->pregunta2,true);
		$criteria->compare('pregunta3',$this->pregunta3,true);
		$criteria->compare('password',$this->password,true);

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
