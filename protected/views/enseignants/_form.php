<?php
/* @var $this EnseignantsController */
/* @var $model Enseignants */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'enseignants-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Les champs avec <span class="required">*</span> sont obligatoires.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ETABLISSEMENT_ID'); ?>
		<?php echo  $form->dropDownList($model,'ETABLISSEMENT_ID',CHtml::listData(Etablissements::model()->findAll(), 'ETABLISSEMENT_ID', 'NOM')); ?>
		<?php echo $form->error($model,'ETABLISSEMENT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'STATUT_ID'); ?>
		<?php echo  $form->dropDownList($model,'STATUT_ID',CHtml::listData(Statuts::model()->findAll(), 'STATUT_ID', 'NOM')); ?>
		<?php echo $form->error($model,'STATUT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOM'); ?>
		<?php echo $form->textField($model,'NOM',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NOM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PRENOM'); ?>
		<?php echo $form->textField($model,'PRENOM',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PRENOM'); ?>
	</div>
    <?php /*
	<div class="row">
		<?php echo $form->labelEx($model,'LOGIN'); ?>
		<?php echo $form->textField($model,'LOGIN',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'LOGIN'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'PASSWORD'); ?>
	</div>    */ ?>

	<div class="row">
		<?php echo $form->labelEx($model,'TELEPHONE'); ?>
		<?php echo $form->textField($model,'TELEPHONE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'TELEPHONE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Créer' : 'Enregistrer'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->