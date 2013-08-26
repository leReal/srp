<?php
/* @var $this EtablissementsController */
/* @var $data Etablissements */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ETABLISSEMENT_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ETABLISSEMENT_ID), array('view', 'id'=>$data->ETABLISSEMENT_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SOCIETE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->sOCIETE->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOM')); ?>:</b>
	<?php echo CHtml::encode($data->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />


</div>