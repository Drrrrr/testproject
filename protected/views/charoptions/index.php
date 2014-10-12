<?php
/* @var $this CharoptionsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Charoptions',
);

$this->menu=array(
	array('label'=>'Create Charoptions', 'url'=>array('create')),
	array('label'=>'Manage Charoptions', 'url'=>array('admin')),
);
?>

<h1>Charoptions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
