<?php
/* @var $this VentaController */
/* @var $model Venta */

$this->breadcrumbs=array(
	'Ventas'=>array('index'),
	$model->folio,
);

$this->menu=array(
	array('label'=>'List Venta', 'url'=>array('index')),
	array('label'=>'Create Venta', 'url'=>array('create')),
	array('label'=>'Update Venta', 'url'=>array('update', 'id'=>$model->folio)),
	array('label'=>'Delete Venta', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->folio),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Venta', 'url'=>array('admin')),
);
?>

<h1>View Venta #<?php echo $model->folio; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'folio',
		'fecha_venta',
		'id_cliente',
		'id_empleado',
	),
)); ?>
