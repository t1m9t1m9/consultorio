<?php

/**
 * This is the model class for table "solicitudesrecibidas".
 *
 * The followings are the available columns in table 'solicitudesrecibidas':
 * @property integer $id
 * @property string $tipoSolicitud
 * @property string $ciUsuario
 * @property integer $respuesta
 * @property string $observaciones
 * @property string $nombre
 * @property string $apellido
 */
class Solicitudesrecibidas extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'solicitudesrecibidas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('respuesta', 'numerical', 'integerOnly'=>true),
			array('tipoSolicitud', 'length', 'max'=>100),
			array('ciUsuario', 'length', 'max'=>10),
			array('observaciones', 'length', 'max'=>300),
			array('nombre, apellido', 'length', 'max'=>32),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, tipoSolicitud, ciUsuario, respuesta, observaciones, nombre, apellido', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'tipoSolicitud' => 'Tipo Solicitud',
			'ciUsuario' => 'Ci Usuario',
			'respuesta' => 'Respuesta',
			'observaciones' => 'Observaciones',
			'nombre' => 'Nombre',
			'apellido' => 'Apellido',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('tipoSolicitud',$this->tipoSolicitud,true);
		$criteria->compare('ciUsuario',$this->ciUsuario,true);
		$criteria->compare('respuesta',$this->respuesta);
		$criteria->compare('observaciones',$this->observaciones,true);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('apellido',$this->apellido,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Solicitudesrecibidas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
