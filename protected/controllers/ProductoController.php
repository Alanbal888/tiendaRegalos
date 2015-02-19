<?php

class ProductoController extends Controller
{
	public $layout='//layouts/principal';
	public function actionIndex()
	{
		$products=new CActiveDataProvider('Producto',array(
	   		'pagination'=>array(
	     	'pageSize'=>4, ),
	     	)
	 	);
		$this->render('/producto/productoListado',array('products'=>$products,)
		);
	}
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */


	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		  $products=Producto::model()->find('id_producto=:idProducto',
                              array(':idProducto'=>$id));
		  $this->render('productoDetalle',array(
		      'products'=>$products,
		   ));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$product =new Producto;
		$model = new ActualizarProductoForm;

		$form =
			 new CForm('application.views.producto.productoActualizar',$model);
			 if ($form->submitted('guardar')&& $form->validate()) {
			 	$product->id_producto = $model->id_producto;
			 	$product->nombre_p = $model->nombre_p;
			  	$product->precio_unitario = $model->precio_unitario;
			  	$product->unidades_existencia = $model->unidades_existencia;
			   	$product->save();
			   	$this->redirect(array('producto/productoListado'));
			 }
			 else
			   $this->render('productoForm',array(
			     'form'=>$form,
			 ));
		}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$products=Producto::model()->find('id_producto=:idProducto',
	                            array(':idProducto'=>$id));
	 	$model = new ActualizarProductoForm;

	
		$model->nombre_p = $products->nombre_p;
		$model->precio_unitario = $products->precio_unitario;
		$model->unidades_existencia = $products->unidades_existencia;
		$form =
		   new CForm('application.views.producto.productoActualizar',$model);
		if ($form->submitted('guardar')&& $form->validate()) {
		
			$product->nombre_p = $model->nombre_p;
			$product->precio_unitario = $model->precio_unitario;
			$product->unidades_existencia = $model->unidades_existencia;
		   	$products->save();
		   	$this->redirect(array('consulta'."&id=".$id));
		}
		 else
		   $this->render('productoForm',array(
		     'form'=>$form,
		 ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		 $model=Producto::model()->find('id_producto=:idProducto',
		                             array(':idProducto'=>$id));
		 $model->delete();
		 $producto=Producto::model()->findAll();
		 $this->render('productoListado',array(
		     'products'=>$products,
		  ));
	}





	//Consulta de producto

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Producto('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Producto']))
			$model->attributes=$_GET['Producto'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Producto the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Producto::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Producto $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='producto-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
	
}
