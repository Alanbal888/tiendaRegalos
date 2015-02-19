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
	

	public function actionView($id)
	{
		  $products=Producto::model()->find('id_producto=:idProducto',
                              array(':idProducto'=>$id));
		  $this->render('productoDetalle',array(
		      'products'=>$products,
		   ));
	}

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
			   	$this->redirect(array('index'));
			 }
			 else
			   $this->render('productoForm',array(
			     'form'=>$form,
			 ));
		}

	public function actionUpdate($id)
	{
		$products=Producto::model()->find('id_producto=:idProducto',
	                            array(':idProducto'=>$id));
	 	$model = new ActualizarProductoForm;

		$model->id_producto = $products->id_producto;
		$model->nombre_p = $products->nombre_p;
		$model->precio_unitario = $products->precio_unitario;
		$model->unidades_existencia = $products->unidades_existencia;
		$form =
		   new CForm('application.views.producto.productoActualizar',$model);
		if ($form->submitted('guardar')&& $form->validate()) {
			$product->id_producto = $model->id_producto;
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
	
}
