<?php
/* @var $this FraisInscriptionController */
/* @var $data FraisInscription */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('payement_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->payement_id), array('view', 'id'=>$data->payement_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANNEEACADEMIQUE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->aNNEEACADEMIQUE->DATEDEB."/".$data->aNNEEACADEMIQUE->DATEFIN); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ELEVE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->eLEVE->NOM." ".$data->eLEVE->PRENOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TYPE_PAIEMENT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->tYPEPAIEMENT->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ETABLISSEMENT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->eTABLISSEMENT->NOM); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE')); ?>:</b>
	<?php echo CHtml::encode($data->DATE); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MONTANT')); ?>:</b>
	<?php echo CHtml::encode($data->MONTANT); ?>
	<br />

</div>