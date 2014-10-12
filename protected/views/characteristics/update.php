<?php
/* @var $this CharacteristicsController */
/* @var $model Characteristics */

$this->breadcrumbs=array(
	'Characteristics'=>array('index'),
	$model->char_id=>array('view','id'=>$model->char_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Characteristics', 'url'=>array('index')),
	array('label'=>'Create Characteristics', 'url'=>array('create')),
	array('label'=>'View Characteristics', 'url'=>array('view', 'id'=>$model->char_id)),
	array('label'=>'Manage Characteristics', 'url'=>array('admin')),
);
?>

<h1>Update Characteristics <?php echo $model->char_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>