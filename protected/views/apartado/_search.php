<?php
/* @var $this RecursoController */
/* @var $model Recurso */
/* @var $form CActiveForm */
?>

<div class="wide form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id_apartado'); ?>
		<?php echo $form->textField($model,'id_apartado',array('style'=>'width:130px;')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fecha_pago'); ?>
		<?php 
		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
                'language'=>'es',
                'model'=>$model,                                // Model object
                'attribute'=>'fecha_pago', // Attribute name
                //'mode'=>'date',                     // Use "time","date" or "datetime" (default)
                'options'=>array('dateFormat' => 'yy-mm-dd'),                     // jquery plugin options
                'htmlOptions'=>array('readonly'=>true,'style'=>'width:130px;') // HTML options
        ));                             
        ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'monto'); ?>
		<?php echo $form->numberField($model,'monto',array('style'=>'width:100px;')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Buscar'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->