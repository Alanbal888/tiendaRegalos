<?php
/* @var $this ClienteController */
/* @var $data Cliente */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id_cliente')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id_cliente), array('view', 'id'=>$data->id_cliente)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nombre_c')); ?>:</b>
	<?php echo CHtml::encode($data->nombre_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('paterno_c')); ?>:</b>
	<?php echo CHtml::encode($data->paterno_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('materno_c')); ?>:</b>
	<?php echo CHtml::encode($data->materno_c); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('calle')); ?>:</b>
	<?php echo CHtml::encode($data->calle); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('colonia')); ?>:</b>
	<?php echo CHtml::encode($data->colonia); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cp')); ?>:</b>
	<?php echo CHtml::encode($data->cp); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('num_ext')); ?>:</b>
	<?php echo CHtml::encode($data->num_ext); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telefono')); ?>:</b>
	<?php echo CHtml::encode($data->telefono); ?>
	<br />

	*/ ?>

</div>