<?php
/* @var $this TestsController */
/* @var $data Tests */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('test_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->test_id), array('view', 'id'=>$data->test_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />


</div>