<?php

/**
 * This is the model class for table "apartado".
 *
 * The followings are the available columns in table 'apartado':
 * @property integer $id_apartado
 * @property string $fecha_pago
 * @property string $monto
 * @property integer $folio_venta
 *
 * The followings are the available model relations:
 * @property Venta $folioVenta
 */
class Apartado extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'apartado';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('fecha_pago, monto, folio_venta', 'required'),
			array('folio_venta', 'numerical', 'integerOnly'=>true),
			array('monto', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_apartado, fecha_pago, monto, folio_venta', 'safe', 'on'=>'search'),
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
			'folioVenta' => array(self::BELONGS_TO, 'Venta', 'folio_venta'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_apartado' => 'Id Apartado',
			'fecha_pago' => 'Fecha Pago',
			'monto' => 'Monto',
			'folio_venta' => 'Folio Venta',
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

		$criteria->compare('id_apartado',$this->id_apartado);
		$criteria->compare('fecha_pago',$this->fecha_pago,true);
		$criteria->compare('monto',$this->monto,true);
		$criteria->compare('folio_venta',$this->folio_venta);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Apartado the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
