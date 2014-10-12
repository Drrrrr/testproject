<?php
/* @var $this PsychotestsController */

$testname = Tests::model()->findByPk($selected_test)->name;

$this->pageTitle="Passing the test " . $testname;

$this->breadcrumbs=array(
	'Psychotests'=>array('/psychotests'),
	'Test',
);
?>

<?php
	$questions = Questions::model()->findAllByAttributes( array('test_id' => $selected_test) );
?>

<h2><b><?php echo ">>> " . $testname . " <<<"; ?></b></h2>

<?php echo CHtml::beginForm(); ?>

<?php 
	$i = 1 ;
	Yii::app()->session['currentTest'] = $selected_test;
?>

<?php foreach($questions as $q): ?>
		<b><?php echo $q->description; ?></b>

		<?php $options = Options::model()->findAllByAttributes( array('question_id' => $q->question_id) ); ?>

		<?php 
			$optslabels = array();
		 ?>

		<?php foreach($options as $o){
			$optslabels[$o->option_id] = $o->description;
		}
		?>

		<br>

		<?php echo CHtml::radioButtonList( "rb".$i, '', $optslabels); ?>

		<?php $i += 1 ?>

		<br>
		<br>
<?php endforeach; ?>

<?php echo CHtml::submitbutton('Узнать результат'); ?>

<?php echo CHtml::endForm(); ?>