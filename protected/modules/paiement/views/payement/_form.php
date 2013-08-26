<?php
/* @var $this PayementController */
/* @var $model Payement */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'payement-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Les champs avec <span class="required">*</span> sont obligatoires.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ANNEEACADEMIQUE_ID'); ?>
		<?php echo $form->dropDownList($model,'ANNEEACADEMIQUE_ID',CHtml::listData(Anneeacademiques::model()->findAll(),'ANNEEACADEMIQUE_ID', 'DATEDEB'),
                        array('empty' => "Sélectionnez l'année académique dans la liste")); ?>
		<?php echo $form->error($model,'ANNEEACADEMIQUE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ELEVE_ID'); ?>
		<?php echo $form->dropDownList($model,'ELEVE_ID',CHtml::listData(Eleves::model()->findAll(),'ELEVE_ID', 'NOM'),
                        array('empty' => "Sélectionnez l'élève dans la liste")); ?>
		<?php echo $form->error($model,'ELEVE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TYPE_PAIEMENT_ID'); ?>
		<?php echo $form->dropDownList($model,'TYPE_PAIEMENT_ID',CHtml::listData(Typepaiements::model()->findAll(),'TYPE_PAIEMENT_ID', 'NOM'),
                        array('empty' => "Sélectionnez le type de paiement dans la liste")); ?>
		<?php echo $form->error($model,'TYPE_PAIEMENT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ETABLISSEMENT_ID'); ?>
		<?php echo $form->dropDownList($model,'ETABLISSEMENT_ID',CHtml::listData(Etablissements::model()->findAll(),'ETABLISSEMENT_ID', 'NOM'),
                        array('empty' => "Sélectionnez l'établissement dans la liste")); ?>
		<?php echo $form->error($model,'ETABLISSEMENT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'MONTANT'); ?>
		<?php echo $form->textField($model,'MONTANT',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'MONTANT'); ?>
	</div>


	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enregistrer' : 'Enregistrer'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->