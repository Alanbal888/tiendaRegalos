<?php
class ApartadoController extends CController {
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	
	/**
	 * Lists all models.
	 */

	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}

	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Apartado');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

}