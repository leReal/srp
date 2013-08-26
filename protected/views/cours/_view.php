<?php
/* @var $this CoursController */
/* @var $data Cours */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('COURS_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->COURS_ID), array('view', 'id'=>$data->COURS_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ETABLISSEMENT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->eTABLISSEMENT->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOM')); ?>:</b>
	<?php echo CHtml::encode($data->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />


</div>