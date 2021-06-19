<?php

/**
 * This is the model class for table "agenda".
 *
 * The followings are the available columns in table 'agenda':
 * @property integer $id
 * @property string $hora
 * @property string $fecha
 * @property string $confirmacion
 * @property string $ciUsuario
 */
class Agenda extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'agenda';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('hora, fecha, confirmacion, ciUsuario', 'required'),
			array('hora', 'length', 'max'=>6),
			array('confirmacion', 'length', 'max'=>2),
			array('ciUsuario', 'length', 'max'=>10),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, hora, fecha, confirmacion, ciUsuario', 'safe', 'on'=>'search'),
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
			'hora' => 'Hora',
			'fecha' => 'Fecha',
			'confirmacion' => 'Confirmacion',
			'ciUsuario' => 'Ci Usuario',
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
		$criteria->compare('hora',$this->hora,true);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('confirmacion',$this->confirmacion,true);
		$criteria->compare('ciUsuario',$this->ciUsuario,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Agenda the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
