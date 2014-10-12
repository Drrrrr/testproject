<?php
/* @var $this CharacteristicsController */
/* @var $model Characteristics */

$this->breadcrumbs=array(
	'Characteristics'=>array('index'),
	$model->char_id,
);

$this->menu=array(
	array('label'=>'List Characteristics', 'url'=>array('index')),
	array('label'=>'Create Characteristics', 'url'=>array('create')),
	array('label'=>'Update Characteristics', 'url'=>array('update', 'id'=>$model->char_id)),
	array('label'=>'Delete Characteristics', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->char_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Characteristics', 'url'=>array('admin')),
);
?>

<h1>View Characteristics #<?php echo $model->char_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'char_id',
		'char_name',
	),
)); ?>
