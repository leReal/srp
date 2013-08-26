<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Bienvenu dans <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>
<?php /*
<?php $this->beginWidget('zii.widgets.CPortlet' , array(
			'title'=>'ACCUEIL',                     
		)); ?>

<div class="adminmenu">
<ul>
    <li><?php echo CHtml::link('Elèves',array('/eleves/index'));  ?></li>
    <li><?php echo CHtml::link('Enseignants',array('/enseignants/index')); ?></li>
    <li><?php echo CHtml::link('Classes',array('/classes/index')); ?></li>
    <li><?php echo CHtml::link('Cours',array('/cours/index')); ?></li>
</ul>
</div> > 
<?php $this->endWidget(); ?> */