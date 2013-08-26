<?php
/* @var $this SiteController */
/* @var $model ContactForm */
/* @var $form CActiveForm */

$this->pageTitle=Yii::app()->name . ' - ADMINISTRATION ';
$this->breadcrumbs=array(
	'Administration',
);
?>

<!-- <h1>ADMINISTRATION</h1>-->

<?php if(Yii::app()->user->hasFlash('administration')): ?>

<div class="flash-success">
	<?php echo Yii::app()->user->getFlash('administration'); ?>
</div>

<?php else: ?>

<?php $this->beginWidget('zii.widgets.CPortlet' , array(
			'title'=>'ADMINISTRATION',
		)); ?>
<div class="adminmenu">
<ul>
    <li><?php echo CHtml::link('Années Académiques',array('anneeacademiques/index')); ?></li>
    <li><?php echo CHtml::link('Etablissements',array('etablissements/index')); ?></li>
    <li><?php echo CHtml::link('Sociétes',array('societes/index')); ?></li>
    <li><?php echo CHtml::link('Statuts',array('statuts/index')); ?></li>
    <li><?php echo CHtml::link('Accesoires',array('accesoires/index')); ?></li>
     <li><?php echo CHtml::link('Utilisateurs',array('utilisateurs/index')); ?></li>
    <li><?php echo CHtml::link('Permissions',array('/rights')); ?></li>
</ul>
</div>
<?php $this->endWidget(); ?>
<div class="espace">
    &nbsp;
</div>
<?php endif; ?>