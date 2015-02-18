<?php
/* @var $this RecursoController */
/* @var $data Recurso */
?>

	<p class="media-heading">
	<b><?php echo CHtml::encode($data->getAttributeLabel('ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_apartado), array('view', 'id'=>$data->id_apartado)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Fecha de Pago')); ?>:</b>
	<?php echo CHtml::encode($data->fecha_pago); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Monto')); ?>:</b>
	<?php echo CHtml::encode("$ ".$data->monto); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('Folio de Venta')); ?>:</b>
	<?php echo CHtml::encode("$ ".$data->folio_venta); ?>
	<br />
	</p>
