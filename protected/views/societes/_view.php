<?php
/* @var $this SocietesController */
/* @var $data Societes */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('SOCIETE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->SOCIETE_ID), array('view', 'id'=>$data->SOCIETE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOM')); ?>:</b>
	<?php echo CHtml::encode($data->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />


</div>