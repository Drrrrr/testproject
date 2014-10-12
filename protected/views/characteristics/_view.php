<?php
/* @var $this CharacteristicsController */
/* @var $data Characteristics */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('char_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->char_id), array('view', 'id'=>$data->char_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('char_name')); ?>:</b>
	<?php echo CHtml::encode($data->char_name); ?>
	<br />


</div>