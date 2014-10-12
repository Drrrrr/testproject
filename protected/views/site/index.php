<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Добро пожаловать на <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<?php echo CHtml::link( "Выберите", array("psychotests/index")); ?> тест для прохождения.
<br>
Отредактируйте <?php echo CHtml::link( "характеристики", array("characteristics/index")); ?>.
<br>
Ну или вы <?php echo CHtml::link( "можете", array("tests/index")); ?>
 <?php echo CHtml::link( "отредактировать", array("questions/index")); ?>
 <?php echo CHtml::link( "много", array("options/index")); ?>
 <?php echo CHtml::link( "всего", array("results/index")); ?>
 <?php echo CHtml::link( "остального", array("charoptions/index")); ?> ... :)

<br><br>
 Внимание, для прохождения тестов необходимо знание английского!