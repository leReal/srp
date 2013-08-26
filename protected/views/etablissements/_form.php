<?php
/* @var $this EtablissementsController */
/* @var $model Etablissements */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'etablissements-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Les champs avec <span class="required">*</span> sont obligatires.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'SOCIETE_ID'); ?>
		<?php echo $form->dropDownList($model,'SOCIETE_ID',CHtml::listData(Societes::model()->findAll(), 'SOCIETE_ID', 'NOM')); ?>
		<?php echo $form->error($model,'SOCIETE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOM'); ?>
		<?php echo $form->textField($model,'NOM',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NOM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DESCRIPTION'); ?>
		<?php echo $form->textArea($model,'DESCRIPTION',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'DESCRIPTION'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Créer' : 'Enregistrer'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->