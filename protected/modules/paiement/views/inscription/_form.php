<?php
/* @var $this InscriptionController */
/* @var $model Inscription */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'inscription-form',
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
		<?php echo $form->labelEx($model,'CLASSE_ID'); ?>
		<?php echo $form->dropDownList($model,'CLASSE_ID',CHtml::listData(Classes::model()->findAll(),'CLASSE_ID', 'NOM'),
                        array('empty' => "Sélectionnez la classe dans la liste")); ?>
		<?php echo $form->error($model,'CLASSE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ETABLISSEMENT_ID'); ?>
		<?php echo $form->dropDownList($model,'ETABLISSEMENT_ID',CHtml::listData(Etablissements::model()->findAll(),'ETABLISSEMENT_ID', 'NOM'),
                        array('empty' => "Sélectionnez l'établissement classe dans la liste")); ?>
		<?php echo $form->error($model,'ETABLISSEMENT_ID'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'NUMERO'); ?>
		<?php echo $form->textField($model,'NUMERO'); ?>
		<?php echo $form->error($model,'NUMERO'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enregistrer' : 'Enregistrer'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->