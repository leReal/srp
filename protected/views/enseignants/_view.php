<?php
/* @var $this EnseignantsController */
/* @var $data Enseignants */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESEIGNANT_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->ESEIGNANT_ID), array('view', 'id'=>$data->ESEIGNANT_ID)); ?>
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

<?php /*	<b><?php echo CHtml::encode($data->getAttributeLabel('LOGIN')); ?>:</b>
	<?php echo CHtml::encode($data->LOGIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('PASSWORD')); ?>:</b>
	<?php echo CHtml::encode($data->PASSWORD); ?>
	<br /> ?>
*/ ?>
	
	<b><?php echo CHtml::encode($data->getAttributeLabel('TELEPHONE')); ?>:</b>
	<?php echo CHtml::encode($data->TELEPHONE); ?>
	<br />

	

</div>