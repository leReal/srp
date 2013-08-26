<?php
/* @var $this ClassesController */
/* @var $model Classes */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'classes-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Les champs avec <span class="required">*</span> sont obligatoires.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ETABLISSEMENT_ID'); ?>
		<?php echo  $form->dropDownList($model,'ETABLISSEMENT_ID',CHtml::listData(Etablissements::model()->findAll(), 'ETABLISSEMENT_ID', 'NOM'));?>
		<?php echo $form->error($model,'ETABLISSEMENT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOM'); ?>
		<?php echo $form->textField($model,'NOM',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NOM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NIVEAU'); ?>
		<?php echo $form->textField($model,'NIVEAU',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NIVEAU'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FRAIS_SCOLARITE'); ?>
		<?php echo $form->textField($model,'FRAIS_SCOLARITE',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'FRAIS_SCOLARITE'); ?>
	</div>

	<?php /*<div class="row">
		<?php echo $form->labelEx($model,'MOYENE'); ?>
		<?php echo $form->textField($model,'MOYENE',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'MOYENE'); ?
	</div> */?>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Créer' : 'Enregistrer'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->