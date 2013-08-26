<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	$this->module->id,
);
?>

<?php $this->beginWidget('zii.widgets.CPortlet' , array(
			'title'=>'Gestion des Paiements',
		)); ?>
<div class="adminmenu">
<ul>
    <li><?php echo CHtml::link('Type de paiement',array('/paiement/Typepaiements')); ?></li>
    <li><?php echo CHtml::link('Inscriptions',array('/paiement/Inscription')); ?></li>
    <li><?php echo CHtml::link('Frais de Pension',array('/paiement/Payement')); ?></li>
</ul>
</div>
<?php $this->endWidget(); ?>
