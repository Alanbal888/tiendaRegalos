<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property integer $id_empleado
 * @property string $username
 * @property string $password
 * @property integer $rol
 * @property string $nombre_e
 * @property string $paterno_e
 * @property string $materno_e
 * @property string $telefono
 * @property string $calle
 * @property string $colonia
 * @property integer $CP
 * @property string $num_ext
 * @property string $municipio
 *
 * The followings are the available model relations:
 * @property Venta[] $ventas
 */
class Usuario extends CActiveRecord
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
			array('username, password, rol, nombre_e, paterno_e, materno_e, telefono, calle, colonia, CP, num_ext, municipio', 'required'),
			array('rol, CP', 'numerical', 'integerOnly'=>true),
			array('username', 'length', 'max'=>15),
			array('password, telefono, num_ext', 'length', 'max'=>20),
			array('nombre_e', 'length', 'max'=>30),
			array('paterno_e, materno_e', 'length', 'max'=>25),
			array('calle, colonia', 'length', 'max'=>50),
			array('municipio', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_empleado, username, password, rol, nombre_e, paterno_e, materno_e, telefono, calle, colonia, CP, num_ext, municipio', 'safe', 'on'=>'search'),
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
			'ventas' => array(self::HAS_MANY, 'Venta', 'id_empleado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_empleado' => 'Id Empleado',
			'username' => 'Username',
			'password' => 'Password',
			'rol' => 'Rol',
			'nombre_e' => 'Nombre E',
			'paterno_e' => 'Paterno E',
			'materno_e' => 'Materno E',
			'telefono' => 'Telefono',
			'calle' => 'Calle',
			'colonia' => 'Colonia',
			'CP' => 'Cp',
			'num_ext' => 'Num Ext',
			'municipio' => 'Municipio',
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

		$criteria->compare('id_empleado',$this->id_empleado);
		$criteria->compare('username',$this->username,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('rol',$this->rol);
		$criteria->compare('nombre_e',$this->nombre_e,true);
		$criteria->compare('paterno_e',$this->paterno_e,true);
		$criteria->compare('materno_e',$this->materno_e,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('calle',$this->calle,true);
		$criteria->compare('colonia',$this->colonia,true);
		$criteria->compare('CP',$this->CP);
		$criteria->compare('num_ext',$this->num_ext,true);
		$criteria->compare('municipio',$this->municipio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
