<?php

/**
 * This is the model class for table "cliente".
 *
 * The followings are the available columns in table 'cliente':
 * @property integer $id_cliente
 * @property string $nombre_c
 * @property string $paterno_c
 * @property string $materno_c
 * @property string $calle
 * @property string $colonia
 * @property integer $cp
 * @property string $num_ext
 * @property string $telefono
 *
 * The followings are the available model relations:
 * @property Venta[] $ventas
 */
class Cliente extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'cliente';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_c, paterno_c, materno_c, telefono', 'required'),
			array('cp', 'numerical', 'integerOnly'=>true),
			array('nombre_c, paterno_c, materno_c, calle, colonia', 'length', 'max'=>50),
			array('num_ext, telefono', 'length', 'max'=>20),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_cliente, nombre_c, paterno_c, materno_c, calle, colonia, cp, num_ext, telefono', 'safe', 'on'=>'search'),
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
			'ventas' => array(self::HAS_MANY, 'Venta', 'id_cliente'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_cliente' => 'Id Cliente',
			'nombre_c' => 'Nombre C',
			'paterno_c' => 'Paterno C',
			'materno_c' => 'Materno C',
			'calle' => 'Calle',
			'colonia' => 'Colonia',
			'cp' => 'Cp',
			'num_ext' => 'Num Ext',
			'telefono' => 'Telefono',
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

		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('nombre_c',$this->nombre_c,true);
		$criteria->compare('paterno_c',$this->paterno_c,true);
		$criteria->compare('materno_c',$this->materno_c,true);
		$criteria->compare('calle',$this->calle,true);
		$criteria->compare('colonia',$this->colonia,true);
		$criteria->compare('cp',$this->cp);
		$criteria->compare('num_ext',$this->num_ext,true);
		$criteria->compare('telefono',$this->telefono,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Cliente the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
