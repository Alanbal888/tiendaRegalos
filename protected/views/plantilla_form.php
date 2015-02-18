<div class="form">
	<?php $form=$this->beginWidget('CActiveForm', array(
		'id'=>'x-form',
		// Please note: When you enable ajax validation, make sure the corresponding
		// controller action is handling ajax validation correctly.
		// There is a call to performAjaxValidation() commented in generated controller code.
		// See class documentation of CActiveForm for details on this.
		'enableAjaxValidation'=>false,
	)); ?>

	<?php echo $form->errorSummary($model); ?>

	<?php echo $form->labelEx($model,'campo_x'); ?>
	<?php echo $form->textField($model,'campo_x'); ?>
	<?php echo $form->error($model,'campo_x'); ?>

				<?php if($model->isNewRecord):?>
						<?php $form->submitButton('Crear') ?>
				<?php else: ?>
						<?php $form->submitButton('Guardar Cambios') ?>
				<?php endif; ?>

	<?php $this->endWidget(); ?>
</div>
