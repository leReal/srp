<?php
/* @var $this InscriptionController */
/* @var $data Inscription */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('inscription_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->inscription_id), array('view', 'id'=>$data->inscription_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANNEEACADEMIQUE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->aNNEEACADEMIQUE->DATEDEB."/".$data->aNNEEACADEMIQUE->DATEFIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ELEVE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->eLEVE->NOM." ".$data->eLEVE->PRENOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLASSE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->cLASSE->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ETABLISSEMENT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->eTABLISSEMENT->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE')); ?>:</b>
	<?php echo CHtml::encode($data->DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NUMERO')); ?>:</b>
	<?php echo CHtml::encode($data->NUMERO); ?>
	<br />


</div>