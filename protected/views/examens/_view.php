<?php
/* @var $this ExamensController */
/* @var $data Examens */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EXAMEN_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->EXAMEN_ID), array('view', 'id'=>$data->EXAMEN_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ETABLISSEMENT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ETABLISSEMENT_ID); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOM')); ?>:</b>
	<?php echo CHtml::encode($data->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DESCRIPTION')); ?>:</b>
	<?php echo CHtml::encode($data->DESCRIPTION); ?>
	<br />


</div>