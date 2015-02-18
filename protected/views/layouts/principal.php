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

<div class="container" id="page">
	<div id="mainmenu">

		<div class="navbar navbar-default">
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                  <ul class="nav navbar-nav">
					<?php $this->widget('zii.widgets.CMenu',array(
						'items'=>array(
							array('label'=>'Inicio', 'url'=>array('')),
							array('label'=>'Salir ('.Yii::app()->user->name.')', 'url'=>array('/principal/logout'), 'visible'=>!Yii::app()->user->isGuest)
						),
						'htmlOptions'=>array("class"=>"nav navbar-nav",)
					)); ?>
						 </ul>
	                  <div class="navbar-collapse collapse">
		                  <ul class="nav navbar-nav" style="float:right">
		                  	<li><i class="glyphicon glyphicon-record" style="margin:15px 10px 0 10px"></i><span style="margin-top:-10px; position:relative;"><?php echo Yii::app()->user->name; ?></span></li>
		                  </ul>	
	                  </div>	
                </div>
        </div>

	</div><!-- mainmenu -->

	<?php echo $content; ?>

	<div class="clear"></div>
</div><!-- page -->

<script type="text/javascript" src="<?php echo Yii::app()->baseUrl;?>/js/tabs.js"></script>


</body>
</html>
