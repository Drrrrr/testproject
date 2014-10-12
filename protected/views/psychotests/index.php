<?php
/* @var $this PsychotestsController */

$this->breadcrumbs=array(
	'Psychotests',
);
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	<?php 
	echo CHtml::beginForm();

	$selected = '';
	echo "Select test: ";
	echo CHtml::dropDownList('choice', $selected, $tests);
	?>


	<?php echo CHtml::submitbutton('Пройти тест'); ?>


	<?php echo CHtml::endForm(); ?>
	

</p>
