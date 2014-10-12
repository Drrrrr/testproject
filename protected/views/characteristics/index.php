<?php
/* @var $this CharacteristicsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Characteristics',
);

$this->menu=array(
	array('label'=>'Create Characteristics', 'url'=>array('create')),
	array('label'=>'Manage Characteristics', 'url'=>array('admin')),
);
?>

<h1>Characteristics</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
