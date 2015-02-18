<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/style.css" rel="stylesheet">
	<link href="<?php echo Yii::app()->theme->baseUrl;?>/css/tabs.css" rel="stylesheet">

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<?php 
	Yii::app()->clientScript->registerCoreScript('jquery');
?>


<div id="navigation">
   		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Ventas', 'url'=>array('/venta/index')),
				array('label'=>'Almacen', 'url'=>array('/almacen/index')),
				array('label'=>'Usuarios', 'url'=>array('/usuarios/index')),
				array('label'=>'Clientes', 'url'=>array('/clientes/index')),
				array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/principal/logout'))
			),
		)); ?>
 </div>



	<div class="clear"></div>
</div><!-- page -->

<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/tabs.js"></script>


</body>
</html>
