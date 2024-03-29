<?php
/* @var $this TestsController */
/* @var $model Tests */

$this->breadcrumbs=array(
	'Tests'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Tests', 'url'=>array('index')),
	array('label'=>'Create Tests', 'url'=>array('create')),
	array('label'=>'Update Tests', 'url'=>array('update', 'id'=>$model->test_id)),
	array('label'=>'Delete Tests', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->test_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tests', 'url'=>array('admin')),
);
?>

<h1>View Tests #<?php echo $model->test_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'test_id',
		'name',
	),
)); ?>
