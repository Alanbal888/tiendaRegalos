<?php
/* @var $this ClienteController */
/* @var $model Cliente */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'cliente-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_c'); ?>
		<?php echo $form->textField($model,'nombre_c',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'nombre_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'paterno_c'); ?>
		<?php echo $form->textField($model,'paterno_c',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'paterno_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'materno_c'); ?>
		<?php echo $form->textField($model,'materno_c',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'materno_c'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'calle'); ?>
		<?php echo $form->textField($model,'calle',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'calle'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'colonia'); ?>
		<?php echo $form->textField($model,'colonia',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'colonia'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cp'); ?>
		<?php echo $form->textField($model,'cp'); ?>
		<?php echo $form->error($model,'cp'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'num_ext'); ?>
		<?php echo $form->textField($model,'num_ext',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'num_ext'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->