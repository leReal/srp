<?php
/* @var $this AnneeacademiquesController */
/* @var $data Anneeacademiques */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANNEEACADEMIQUE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ANNEEACADEMIQUE_ID), array('view', 'id'=>$data->ANNEEACADEMIQUE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ETABLISSEMENT_ID')); ?>:</b>
	<?php echo CHtml::encode(Etablissements::model()->findByPk($data->ETABLISSEMENT_ID)->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATEDEB')); ?>:</b>
	<?php echo CHtml::encode($data->DATEDEB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATEFIN')); ?>:</b>
	<?php echo CHtml::encode($data->DATEFIN); ?>
	<br />


</div>