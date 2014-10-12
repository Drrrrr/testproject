<?php
/* @var $this ResultsController */
/* @var $data Results */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('result_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->result_id), array('view', 'id'=>$data->result_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('test_id')); ?>:</b>
	<?php echo CHtml::encode($data->test_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('char_id')); ?>:</b>
	<?php echo CHtml::encode($data->char_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>