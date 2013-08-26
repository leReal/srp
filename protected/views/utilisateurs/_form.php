<?php
/* @var $this UtilisateursController */
/* @var $model Utilisateurs */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'utilisateurs-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'login'); ?>
		<?php echo $form->textField($model,'login',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'login'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
		<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nom'); ?>
		<?php echo $form->textField($model,'nom',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'nom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'prenom'); ?>
		<?php echo $form->textField($model,'prenom',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'prenom'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telephone'); ?>
		<?php echo $form->textField($model,'telephone',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'telephone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'portable'); ?>
		<?php echo $form->textField($model,'portable',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'portable'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'fonction'); ?>
		<?php echo $form->textField($model,'fonction',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'fonction'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->