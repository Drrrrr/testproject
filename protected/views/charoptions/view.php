<?php
/* @var $this CharoptionsController */
/* @var $model Charoptions */

$this->breadcrumbs=array(
	'Charoptions'=>array('index'),
	$model->charoption_id,
);

$this->menu=array(
	array('label'=>'List Charoptions', 'url'=>array('index')),
	array('label'=>'Create Charoptions', 'url'=>array('create')),
	array('label'=>'Update Charoptions', 'url'=>array('update', 'id'=>$model->charoption_id)),
	array('label'=>'Delete Charoptions', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->charoption_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Charoptions', 'url'=>array('admin')),
);
?>

<h1>View Charoptions #<?php echo $model->charoption_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'charoption_id',
		'option_id',
		'points',
		'char_id',
	),
)); ?>
