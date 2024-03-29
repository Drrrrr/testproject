<?php
/* @var $this CharacteristicsController */
/* @var $model Characteristics */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'char_id'); ?>
		<?php echo $form->textField($model,'char_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'char_name'); ?>
		<?php echo $form->textArea($model,'char_name',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->