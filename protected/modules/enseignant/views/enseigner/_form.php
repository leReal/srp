<?php
/* @var $this EnseignerController */
/* @var $model Enseigner */
/* @var $form CActiveForm */
?>

<?php  $model_ac = anneeacademiques::model()->findAll();
		$model_na = enseignants::model()->findAll();
?>

<div class="form">

<?php	$listac=CHtml::listData($model_ac, 'ANNEEACADEMIQUE_ID', 'DATEDEB');
		$listna=CHtml::listData($model_na, 'ESEIGNANT_ID', 'PRENOM');	
?>

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'enseigner-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ETABLISSEMENT_ID'); ?>
		<?php echo $form->dropDownList($model,'ETABLISSEMENT_ID', CHtml::listData(etablissements::model()->findAll(),'ETABLISSEMENT_ID', 'NOM')); ?>
		<?php echo $form->error($model,'ETABLISSEMENT_ID'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'ANNEEACADEMIQUE_ID'); ?>
		<?php echo $form->dropDownList($model,'ANNEEACADEMIQUE_ID', CHtml::listData(anneeacademiques::model()->findAll(),'ANNEEACADEMIQUE_ID', 'DATEDEB')); ?>
		<?php echo $form->dropDownList($model,'ANNEEACADEMIQUE_ID', CHtml::listData(anneeacademiques::model()->findAll(),'ANNEEACADEMIQUE_ID', 'DATEFIN')); ?>
		<?php echo $form->error($model,'ANNEEACADEMIQUE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ESEIGNANT_ID'); ?>
		<?php echo $form->dropDownList($model,'ESEIGNANT_ID', CHtml::listData(enseignants::model()->findAll(),'ESEIGNANT_ID', 'NOM')); ?>
		<?php echo $form->dropDownList($model,'ESEIGNANT_ID', CHtml::listData(enseignants::model()->findAll(),'ESEIGNANT_ID', 'PRENOM')); ?>
		<?php echo $form->error($model,'ESEIGNANT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'CLASSE_ID'); ?>
		<?php echo $form->dropDownList($model,'CLASSE_ID', CHtml::listData(classes::model()->findAll(),'CLASSE_ID', 'NOM')); ?>
		<?php echo $form->error($model,'CLASSE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'COURS_ID'); ?>
		<?php echo $form->dropDownList($model,'COURS_ID', CHtml::listData(cours::model()->findAll(),'COURS_ID', 'NOM')); ?>
		<?php echo $form->error($model,'COURS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ROLE'); ?>
		<?php echo $form->textField($model,'ROLE',array('size'=>60,'maxlength'=>250)); ?>
		<?php echo $form->error($model,'ROLE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'enseigner_id'); ?>
		<?php echo $form->textField($model,'enseigner_id',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'enseigner_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->