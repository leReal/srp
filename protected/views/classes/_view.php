<?php
/* @var $this ClassesController */
/* @var $data Classes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLASSE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->CLASSE_ID), array('view', 'id'=>$data->CLASSE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ETABLISSEMENT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->eTABLISSEMENT->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOM')); ?>:</b>
	<?php echo CHtml::encode($data->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NIVEAU')); ?>:</b>
	<?php echo CHtml::encode($data->NIVEAU); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('FRAIS_SCOLARITE')); ?>:</b>
	<?php echo CHtml::encode($data->FRAIS_SCOLARITE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOYENE')); ?>:</b>
	<?php echo CHtml::encode($data->MOYENE); ?>
	<br />
</div>