<?php
/* @var $this CharoptionsController */
/* @var $data Charoptions */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('charoption_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->charoption_id), array('view', 'id'=>$data->charoption_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('option_id')); ?>:</b>
	<?php echo CHtml::encode($data->option_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('points')); ?>:</b>
	<?php echo CHtml::encode($data->points); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('char_id')); ?>:</b>
	<?php echo CHtml::encode($data->char_id); ?>
	<br />


</div>