<?php

class PsychotestsController extends Controller
{
	public function actionEdit()
	{
		$this->render('edit');
	}

	public $tests, $mynewvar;

	public function actionIndex()
	{
		$tests = Tests::model()->findAll();

		$this->tests = array();

		foreach ( $tests as $test ){
			$this->tests[$test->test_id] = $test->name;
		}

		if ( isset($_POST['choice']) ){
			$this->render('test', array('selected_test' => $_POST['choice'] ));
		} else if ( isset($_POST['yt0']) ) {

			$options = array();
			
			foreach ( $_POST as $val ){
				if ( is_numeric( $val )){
					array_push( $options, $val );
				}
			}
			
			$this->render('results', array('options' => $options));
		} else {
			$this->render('index', array('tests' => $this->tests));
		}
	}

	public function actionTest()
	{
		$this->render('test');
	}

	public function actionResults()
	{
		$this->render('results');
	}

	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}