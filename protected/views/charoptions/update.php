<?php
/* @var $this CharoptionsController */
/* @var $model Charoptions */

$this->breadcrumbs=array(
	'Charoptions'=>array('index'),
	$model->charoption_id=>array('view','id'=>$model->charoption_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Charoptions', 'url'=>array('index')),
	array('label'=>'Create Charoptions', 'url'=>array('create')),
	array('label'=>'View Charoptions', 'url'=>array('view', 'id'=>$model->charoption_id)),
	array('label'=>'Manage Charoptions', 'url'=>array('admin')),
);
?>

<h1>Update Charoptions <?php echo $model->charoption_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>