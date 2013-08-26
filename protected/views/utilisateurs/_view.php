<?php
/* @var $this UtilisateursController */
/* @var $data Utilisateurs */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('utilisateur_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->utilisateur_id), array('view', 'id'=>$data->utilisateur_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('login')); ?>:</b>
	<?php echo CHtml::encode($data->login); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
	<?php echo CHtml::encode($data->password); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nom')); ?>:</b>
	<?php echo CHtml::encode($data->nom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prenom')); ?>:</b>
	<?php echo CHtml::encode($data->prenom); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('telephone')); ?>:</b>
	<?php echo CHtml::encode($data->telephone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('portable')); ?>:</b>
	<?php echo CHtml::encode($data->portable); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('fonction')); ?>:</b>
	<?php echo CHtml::encode($data->fonction); ?>
	<br />

	*/ ?>

</div>