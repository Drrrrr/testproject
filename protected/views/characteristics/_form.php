<?php
/* @var $this CharacteristicsController */
/* @var $model Characteristics */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'characteristics-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'char_id'); ?>
		<?php echo $form->textField($model,'char_id'); ?>
		<?php echo $form->error($model,'char_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'char_name'); ?>
		<?php echo $form->textArea($model,'char_name',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'char_name'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->