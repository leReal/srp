<?php
/* @var $this AccesoiresController */
/* @var $data Accesoires */
?>

<div class="view">

	<b><?php  echo CHtml::encode($data->getAttributeLabel('ACCESOIRE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ACCESOIRE_ID), array('view', 'id'=>$data->ACCESOIRE_ID)); ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('ETABLISSEMENT_ID')); ?>:</b>
	<?php echo CHtml::encode(Etablissements::model()->findByPk($data->ETABLISSEMENT_ID)->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOM')); ?>:</b>
	<?php echo CHtml::encode($data->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />


</div>