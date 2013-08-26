<?php
/* @var $this StatutsController */
/* @var $data Statuts */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUT_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->STATUT_ID), array('view', 'id'=>$data->STATUT_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOM')); ?>:</b>
	<?php echo CHtml::encode($data->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TYPE')); ?>:</b>
	<?php echo CHtml::encode($data->TYPE); ?>
	<br />


</div>