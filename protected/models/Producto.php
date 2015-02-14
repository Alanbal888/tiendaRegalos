<?php

/**
 * This is the model class for table "producto".
 *
 * The followings are the available columns in table 'producto':
 * @property integer $id_producto
 * @property string $nombre_p
 * @property string $categoria
 * @property string $precio_unitario
 * @property integer $unidades_existencia
 *
 * The followings are the available model relations:
 * @property Venta[] $ventas
 */
class Producto extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'producto';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombre_p, categoria, precio_unitario, unidades_existencia', 'required'),
			array('unidades_existencia', 'numerical', 'integerOnly'=>true),
			array('nombre_p', 'length', 'max'=>50),
			array('categoria', 'length', 'max'=>30),
			array('precio_unitario', 'length', 'max'=>5),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id_producto, nombre_p, categoria, precio_unitario, unidades_existencia', 'safe', 'on'=>'search'),
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
			'ventas' => array(self::MANY_MANY, 'Venta', 'detalle_venta(id_producto, folio_venta)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_producto' => 'Id Producto',
			'nombre_p' => 'Nombre P',
			'categoria' => 'Categoria',
			'precio_unitario' => 'Precio Unitario',
			'unidades_existencia' => 'Unidades Existencia',
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

		$criteria->compare('id_producto',$this->id_producto);
		$criteria->compare('nombre_p',$this->nombre_p,true);
		$criteria->compare('categoria',$this->categoria,true);
		$criteria->compare('precio_unitario',$this->precio_unitario,true);
		$criteria->compare('unidades_existencia',$this->unidades_existencia);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Producto the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
