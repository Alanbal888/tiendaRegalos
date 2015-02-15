<?php

class PrincipalController extends Controller
{


	public $layout='//layouts/login';
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}


	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
		if($error=Yii::app()->errorHandler->error)
		{
			if(Yii::app()->request->isAjaxRequest)
				echo $error['message'];
			else
				$this->render('error', $error);
		}
	}


	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
				$this->redirect(array('principal/inicio'));
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}


	/**
		*Ventana de inicio
	**/

	public function actionInicio()
	{
		$this->layout = 'principal';
		$this->render('inicio');
	}

	/**
		*Crear usuario
	**/

	//EJEMPLO

	public function actionCreaModelo()
	{
		$model = new Modelo;

		if(isset($_POST['Modelo']))
		{
			$model->attributes = $_POST['Modelo'];

			if($model->save())
			{
				$this->redirect('principal/inicio',array('tab'=>'tab_proveniente'));
			}
		}

		$this->render('crea_modelo',array('model'=>$model));
	}

	public function actionEditaUsuario($id)
	{

		$model = Usuario::model()->findByPk(array('id_usuario'=>$id));


		if(isset($_POST['Usuario']))
		{
			$model->attributes = $_POST['Usuario'];

			if($model->save())
			{
				$this->redirect('principal/inicio');
			}
		}

		$this->render('crea_usuario',array('model'=>$model));	
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}

	/**
		*Crear producto
	**/

	//EJEMPLO

	public function actionCrearProducto()
	{
		$model = new Modelo;

		if(isset($_POST['Modelo']))
		{
			$model->attributes = $_POST['Modelo'];

			if($model->save())
			{
				$this->redirect('principal/inicio',array('tab'=>'tab_proveniente'));
			}
		}

		$this->render('crea_modelo',array('model'=>$model));
	}

}