<?php
/* @var $this CharoptionsController */
/* @var $model Charoptions */

$this->breadcrumbs=array(
	'Charoptions'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Charoptions', 'url'=>array('index')),
	array('label'=>'Manage Charoptions', 'url'=>array('admin')),
);
?>

<h1>Create Charoptions</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>