<?php
/* @var $this ElevesController */
/* @var $data Eleves */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ELEVE_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ELEVE_ID), array('view', 'id'=>$data->ELEVE_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ETABLISSEMENT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->eTABLISSEMENT->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('STATUT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->sTATUT->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOM')); ?>:</b>
	<?php echo CHtml::encode($data->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PRENOM')); ?>:</b>
	<?php echo CHtml::encode($data->PRENOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_NAISSANCE')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_NAISSANCE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_ENREGISTREMENT')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_ENREGISTREMENT); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOM_PRENOM_PERE')); ?>:</b>
	<?php echo CHtml::encode($data->NOM_PRENOM_PERE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOM__PRENOM_MERE')); ?>:</b>
	<?php echo CHtml::encode($data->NOM__PRENOM_MERE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ADRESSE')); ?>:</b>
	<?php echo CHtml::encode($data->ADRESSE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TELEPHONE_PERE')); ?>:</b>
	<?php echo CHtml::encode($data->TELEPHONE_PERE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('SEXE')); ?>:</b>
	<?php echo CHtml::encode($data->SEXE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TELEPHONE_MERE')); ?>:</b>
	<?php echo CHtml::encode($data->TELEPHONE_MERE); ?>
	<br />


</div>