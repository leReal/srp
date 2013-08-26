<?php
/* @var $this TypepaiementsController */
/* @var $data Typepaiements */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('TYPE_PAIEMENT_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->TYPE_PAIEMENT_ID), array('view', 'id'=>$data->TYPE_PAIEMENT_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ETABLISSEMENT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->eTABLISSEMENT->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOM')); ?>:</b>
	<?php echo CHtml::encode($data->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('TPYE')); ?>:</b>
	<?php if($data->TPYE==1){
            echo 'Crédit';
            }
            else {
            echo 'Débit';
}?>
	<br />


</div>