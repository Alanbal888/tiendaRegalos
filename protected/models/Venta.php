<?php

/**
 * This is the model class for table "venta".
 *
 * The followings are the available columns in table 'venta':
 * @property integer $folio
 * @property string $fecha_venta
 * @property integer $id_cliente
 * @property integer $id_empleado
 *
 * The followings are the available model relations:
 * @property Apartado[] $apartados
 * @property Producto[] $productos
 * @property Cliente $idCliente
 * @property Usuario $idEmpleado
 */
class Venta extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'venta';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_venta, id_cliente, id_empleado', 'required'),
			array('id_cliente, id_empleado', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('folio, fecha_venta, id_cliente, id_empleado', 'safe', 'on'=>'search'),
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
			'apartados' => array(self::HAS_MANY, 'Apartado', 'folioVenta'),
			'productos' => array(self::MANY_MANY, 'Producto', 'detalles_venta(folioVenta, id_producto)'),
			'idCliente' => array(self::BELONGS_TO, 'Cliente', 'id_cliente'),
			'idEmpleado' => array(self::BELONGS_TO, 'Usuario', 'id_empleado'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'folio' => 'Folio',
			'fecha_venta' => 'Fecha Venta',
			'id_cliente' => 'Id Cliente',
			'id_empleado' => 'Id Empleado',
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

		$criteria->compare('folio',$this->folio);
		$criteria->compare('fecha_venta',$this->fecha_venta,true);
		$criteria->compare('id_cliente',$this->id_cliente);
		$criteria->compare('id_empleado',$this->id_empleado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Venta the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
