<?php
/* @var $this PsychotestsController */

$this->breadcrumbs=array(
	'Psychotests'=>array('/psychotests'),
	'Results',
);
?>

<h1><b> Результаты теста: </b></h1>
<?php 
	$test_id = Yii::app()->session['currentTest'];

	$results = Results::model()->findAllByAttributes( array('test_id' => $test_id) );

	$charpoints = array();
?>

<?php
	$maxpoints = 0;
	$alloptions = Charoptions::model()->findAllByAttributes( array('option_id' => $options ));

	foreach ($alloptions as $opt){
		$maxpoints += $opt->points;
	}
	?>

	<?php if ( $maxpoints > 0 ): ?>

		<?php foreach( $results as $result ): ?>

			<br>
			<b><?php echo $result->characteristic->char_name; ?></b>
			(
			<?php
				$points = 0;
				$charoptions = Charoptions::model()->findAllByAttributes( array('option_id' => $options, 'char_id' => $result->char_id));

				foreach ( $charoptions as $charopt ){
					$points += $charopt->points;
				}

				echo ceil(($points*100 / $maxpoints))."%";
			?>
			)
			<br>
			<?php echo $result->description ?>
			<br>

		<?php endforeach; ?>
	
	<?php else: ?>

		<?php echo "Ответьте хотя бы на один вопрос!"; ?>

	<?php endif ?>

	