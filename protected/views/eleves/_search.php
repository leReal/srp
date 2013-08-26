<?php
/* @var $this ElevesController */
/* @var $model Eleves */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ELEVE_ID'); ?>
		<?php echo $form->textField($model,'ELEVE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ETABLISSEMENT_ID'); ?>
		<?php echo  $form->dropDownList($model,'ETABLISSEMENT_ID',CHtml::listData(Etablissements::model()->findAll(), 'ETABLISSEMENT_ID', 'NOM')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUT_ID'); ?>
		<?php echo $form->dropDownList($model,'STATUT_ID',CHtml::listData(Statuts::model()->findAll(),'STATUT_ID', 'NOM')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOM'); ?>
		<?php echo $form->textField($model,'NOM',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRENOM'); ?>
		<?php echo $form->textField($model,'PRENOM',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE_NAISSANCE'); ?>
		<?php echo $form->textField($model,'DATE_NAISSANCE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE_ENREGISTREMENT'); ?>
		<?php echo $form->textField($model,'DATE_ENREGISTREMENT'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOM_PRENOM_PERE'); ?>
		<?php echo $form->textField($model,'NOM_PRENOM_PERE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOM__PRENOM_MERE'); ?>
		<?php echo $form->textField($model,'NOM__PRENOM_MERE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ADRESSE'); ?>
		<?php echo $form->textField($model,'ADRESSE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TELEPHONE_PERE'); ?>
		<?php echo $form->textField($model,'TELEPHONE_PERE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SEXE'); ?>
		<?php echo $form->textField($model,'SEXE',array('size'=>50,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TELEPHONE_MERE'); ?>
		<?php echo $form->textField($model,'TELEPHONE_MERE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Rechercher'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->