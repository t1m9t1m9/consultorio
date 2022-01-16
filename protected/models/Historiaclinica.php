<?php

/**
 * This is the model class for table "historiaclinica".
 *
 * The followings are the available columns in table 'historiaclinica':
 * @property integer $id
 * @property string $fechaHistoria
 * @property string $cedula
 * @property string $apellidoPaterno
 * @property string $apellidoMaterno
 * @property string $primerNombre
 * @property string $segundoNombre
 * @property string $direccion
 * @property string $barrio
 * @property string $canton
 * @property string $provincia
 * @property string $telefono
 * @property string $fechaNacimiento
 * @property string $lugarNacimiento
 * @property string $nacionalidad
 * @property string $grupoCultural
 * @property integer $edad
 * @property string $sexo
 * @property string $estadoCivil
 * @property string $instruccionAprobada
 * @property string $ocupacion
 * @property string $historiaLaboralPasada
 * @property integer $convulsiones
 * @property integer $tosConFlemaConSangre
 * @property integer $fracturas
 * @property integer $cirugia
 * @property integer $alergia
 * @property integer $ira
 * @property integer $hospitalizacion
 * @property string $otros
 * @property integer $hta
 * @property integer $cardiopatia
 * @property integer $hipotiroidismo
 * @property integer $Diabetes
 * @property integer $cancer
 * @property integer $epilepsia
 * @property integer $enfermedadPulmonar
 * @property string $detalleAntecedentesPatologicos
 * @property integer $menarquia
 * @property integer $cm
 * @property integer $disminorrea
 * @property integer $fum
 * @property string $planificacionFamiliar
 * @property string $papanicolao
 * @property string $ecoMamario
 * @property string $mamografia
 * @property string $gesta
 * @property string $menopausia
 * @property string $aborto
 * @property string $ivs
 * @property string $partos
 * @property string $cesareas
 * @property string $hv
 * @property string $hm
 * @property string $detalleginecoObstetriz
 * @property integer $fuma
 * @property string $drogas
 * @property string $alcohol
 * @property string $parejasSexuales
 * @property string $medicamentosHabituales
 * @property string $detalleHabitosToxicos
 * @property string $peso
 * @property string $talla
 * @property string $imc
 * @property string $valnut
 * @property string $ta
 * @property string $fc
 * @property string $fr
 * @property string $sat
 * @property string $detalleEnfermedadActual
 * @property string $detalleExamenFisico
 * @property string $diagnosticoClinico
 * @property string $tratamiento
 */
class Historiaclinica extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'historiaclinica';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('edad, convulsiones, tosConFlemaConSangre, fracturas, cirugia, alergia, ira, hospitalizacion, hta, cardiopatia, hipotiroidismo, Diabetes, cancer, epilepsia, enfermedadPulmonar, menarquia, cm, disminorrea, fum, fuma', 'numerical', 'integerOnly'=>true),
			array('cedula', 'required'),
            array('telefono', 'length', 'max'=>10),
			array('apellidoPaterno, apellidoMaterno, primerNombre, segundoNombre, barrio, canton, provincia, lugarNacimiento, nacionalidad, grupoCultural, sexo, estadoCivil, instruccionAprobada, planificacionFamiliar, papanicolao, ecoMamario, mamografia, gesta, menopausia, aborto, ivs, partos, cesareas, hv, hm, drogas, alcohol, parejasSexuales, medicamentosHabituales, peso, talla, imc, valnut, ta, fc, fr, sat', 'length', 'max'=>32),
			array('direccion, ocupacion, historiaLaboralPasada', 'length', 'max'=>120),
			array('otros, detalleAntecedentesPatologicos, detalleginecoObstetriz, detalleHabitosToxicos', 'length', 'max'=>300),
			array('fechaHistoria, fechaNacimiento, detalleEnfermedadActual, detalleExamenFisico, diagnosticoClinico, tratamiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, fechaHistoria, cedula, apellidoPaterno, apellidoMaterno, primerNombre, segundoNombre, direccion, barrio, canton, provincia, telefono, fechaNacimiento, lugarNacimiento, nacionalidad, grupoCultural, edad, sexo, estadoCivil, instruccionAprobada, ocupacion, historiaLaboralPasada, convulsiones, tosConFlemaConSangre, fracturas, cirugia, alergia, ira, hospitalizacion, otros, hta, cardiopatia, hipotiroidismo, Diabetes, cancer, epilepsia, enfermedadPulmonar, detalleAntecedentesPatologicos, menarquia, cm, disminorrea, fum, planificacionFamiliar, papanicolao, ecoMamario, mamografia, gesta, menopausia, aborto, ivs, partos, cesareas, hv, hm, detalleginecoObstetriz, fuma, drogas, alcohol, parejasSexuales, medicamentosHabituales, detalleHabitosToxicos, peso, talla, imc, valnut, ta, fc, fr, sat, detalleEnfermedadActual, detalleExamenFisico, diagnosticoClinico, tratamiento', 'safe', 'on'=>'search'),
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
			'fechaHistoria' => 'Fecha Historia',
			'cedula' => 'Cedula',
			'apellidoPaterno' => 'Apellido Paterno',
			'apellidoMaterno' => 'Apellido Materno',
			'primerNombre' => 'Primer Nombre',
			'segundoNombre' => 'Segundo Nombre',
			'direccion' => 'Direccion',
			'barrio' => 'Barrio',
			'canton' => 'Canton',
			'provincia' => 'Provincia',
			'telefono' => 'Telefono',
			'fechaNacimiento' => 'Fecha Nacimiento',
			'lugarNacimiento' => 'Lugar Nacimiento',
			'nacionalidad' => 'Nacionalidad',
			'grupoCultural' => 'Grupo Cultural',
			'edad' => 'Edad',
			'sexo' => 'Sexo',
			'estadoCivil' => 'Estado Civil',
			'instruccionAprobada' => 'Instruccion Aprobada',
			'ocupacion' => 'Ocupacion',
			'historiaLaboralPasada' => 'Historia Laboral Pasada',
			'convulsiones' => 'Convulsiones',
			'tosConFlemaConSangre' => 'Tos Con Flema Con Sangre',
			'fracturas' => 'Fracturas',
			'cirugia' => 'Cirugia',
			'alergia' => 'Alergia',
			'ira' => 'Ira',
			'hospitalizacion' => 'Hospitalizacion',
			'otros' => 'Otros',
			'hta' => 'Hta',
			'cardiopatia' => 'Cardiopatia',
			'hipotiroidismo' => 'Hipotiroidismo',
			'Diabetes' => 'Diabetes',
			'cancer' => 'Cancer',
			'epilepsia' => 'Epilepsia',
			'enfermedadPulmonar' => 'Enfermedad Pulmonar',
			'detalleAntecedentesPatologicos' => 'Detalle Antecedentes Patologicos',
			'menarquia' => 'Menarquia',
			'cm' => 'Cm',
			'disminorrea' => 'Disminorrea',
			'fum' => 'Fum',
			'planificacionFamiliar' => 'Planificacion Familiar',
			'papanicolao' => 'Papanicolao',
			'ecoMamario' => 'Eco Mamario',
			'mamografia' => 'Mamografia',
			'gesta' => 'Gesta',
			'menopausia' => 'Menopausia',
			'aborto' => 'Aborto',
			'ivs' => 'Ivs',
			'partos' => 'Partos',
			'cesareas' => 'Cesareas',
			'hv' => 'Hv',
			'hm' => 'Hm',
			'detalleginecoObstetriz' => 'Detallegineco Obstetriz',
			'fuma' => 'Fuma',
			'drogas' => 'Drogas',
			'alcohol' => 'Alcohol',
			'parejasSexuales' => 'Parejas Sexuales',
			'medicamentosHabituales' => 'Medicamentos Habituales',
			'detalleHabitosToxicos' => 'Detalle Habitos Toxicos',
			'peso' => 'Peso',
			'talla' => 'Talla',
			'imc' => 'Imc',
			'valnut' => 'Valnut',
			'ta' => 'Ta',
			'fc' => 'Fc',
			'fr' => 'Fr',
			'sat' => 'Sat',
			'detalleEnfermedadActual' => 'Detalle Enfermedad Actual',
			'detalleExamenFisico' => 'Detalle Examen Fisico',
			'diagnosticoClinico' => 'Diagnostico Clinico',
			'tratamiento' => 'Tratamiento',
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
		$criteria->compare('fechaHistoria',$this->fechaHistoria,true);
		$criteria->compare('cedula',$this->cedula,true);
		$criteria->compare('apellidoPaterno',$this->apellidoPaterno,true);
		$criteria->compare('apellidoMaterno',$this->apellidoMaterno,true);
		$criteria->compare('primerNombre',$this->primerNombre,true);
		$criteria->compare('segundoNombre',$this->segundoNombre,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('barrio',$this->barrio,true);
		$criteria->compare('canton',$this->canton,true);
		$criteria->compare('provincia',$this->provincia,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('fechaNacimiento',$this->fechaNacimiento,true);
		$criteria->compare('lugarNacimiento',$this->lugarNacimiento,true);
		$criteria->compare('nacionalidad',$this->nacionalidad,true);
		$criteria->compare('grupoCultural',$this->grupoCultural,true);
		$criteria->compare('edad',$this->edad);
		$criteria->compare('sexo',$this->sexo,true);
		$criteria->compare('estadoCivil',$this->estadoCivil,true);
		$criteria->compare('instruccionAprobada',$this->instruccionAprobada,true);
		$criteria->compare('ocupacion',$this->ocupacion,true);
		$criteria->compare('historiaLaboralPasada',$this->historiaLaboralPasada,true);
		$criteria->compare('convulsiones',$this->convulsiones);
		$criteria->compare('tosConFlemaConSangre',$this->tosConFlemaConSangre);
		$criteria->compare('fracturas',$this->fracturas);
		$criteria->compare('cirugia',$this->cirugia);
		$criteria->compare('alergia',$this->alergia);
		$criteria->compare('ira',$this->ira);
		$criteria->compare('hospitalizacion',$this->hospitalizacion);
		$criteria->compare('otros',$this->otros,true);
		$criteria->compare('hta',$this->hta);
		$criteria->compare('cardiopatia',$this->cardiopatia);
		$criteria->compare('hipotiroidismo',$this->hipotiroidismo);
		$criteria->compare('Diabetes',$this->Diabetes);
		$criteria->compare('cancer',$this->cancer);
		$criteria->compare('epilepsia',$this->epilepsia);
		$criteria->compare('enfermedadPulmonar',$this->enfermedadPulmonar);
		$criteria->compare('detalleAntecedentesPatologicos',$this->detalleAntecedentesPatologicos,true);
		$criteria->compare('menarquia',$this->menarquia);
		$criteria->compare('cm',$this->cm);
		$criteria->compare('disminorrea',$this->disminorrea);
		$criteria->compare('fum',$this->fum);
		$criteria->compare('planificacionFamiliar',$this->planificacionFamiliar,true);
		$criteria->compare('papanicolao',$this->papanicolao,true);
		$criteria->compare('ecoMamario',$this->ecoMamario,true);
		$criteria->compare('mamografia',$this->mamografia,true);
		$criteria->compare('gesta',$this->gesta,true);
		$criteria->compare('menopausia',$this->menopausia,true);
		$criteria->compare('aborto',$this->aborto,true);
		$criteria->compare('ivs',$this->ivs,true);
		$criteria->compare('partos',$this->partos,true);
		$criteria->compare('cesareas',$this->cesareas,true);
		$criteria->compare('hv',$this->hv,true);
		$criteria->compare('hm',$this->hm,true);
		$criteria->compare('detalleginecoObstetriz',$this->detalleginecoObstetriz,true);
		$criteria->compare('fuma',$this->fuma);
		$criteria->compare('drogas',$this->drogas,true);
		$criteria->compare('alcohol',$this->alcohol,true);
		$criteria->compare('parejasSexuales',$this->parejasSexuales,true);
		$criteria->compare('medicamentosHabituales',$this->medicamentosHabituales,true);
		$criteria->compare('detalleHabitosToxicos',$this->detalleHabitosToxicos,true);
		$criteria->compare('peso',$this->peso,true);
		$criteria->compare('talla',$this->talla,true);
		$criteria->compare('imc',$this->imc,true);
		$criteria->compare('valnut',$this->valnut,true);
		$criteria->compare('ta',$this->ta,true);
		$criteria->compare('fc',$this->fc,true);
		$criteria->compare('fr',$this->fr,true);
		$criteria->compare('sat',$this->sat,true);
		$criteria->compare('detalleEnfermedadActual',$this->detalleEnfermedadActual,true);
		$criteria->compare('detalleExamenFisico',$this->detalleExamenFisico,true);
		$criteria->compare('diagnosticoClinico',$this->diagnosticoClinico,true);
		$criteria->compare('tratamiento',$this->tratamiento,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Historiaclinica the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
