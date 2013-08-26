<?php
/* @var $this AnneeacademiquesController */
/* @var $model Anneeacademiques */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'anneeacademiques-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Les Champs avec <span class="required">*</span> sont obligatoires.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'ETABLISSEMENT_ID'); ?>
		<?php echo $form->dropDownList($model,'ETABLISSEMENT_ID',CHtml::listData(Etablissements::model()->findAll(), 'ETABLISSEMENT_ID', 'NOM')); ?>
		<?php echo $form->error($model,'ETABLISSEMENT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATEDEB'); ?>
		<?php echo $form->textField($model,'DATEDEB',array("id"=>'DATEDEB'));
                      $this->widget('application.extensions.calendar.SCalendar',
                          array(
                           'inputField'=>'DATEDEB',
                            'ifFormat'=>'%Y-%m-%d',
                            )); ?>
		<?php echo $form->error($model,'DATEDEB'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATEFIN'); ?>
		<?php echo $form->textField($model,'DATEFIN',array("id"=>'DATEFIN')); 
                 $this->widget('application.extensions.calendar.SCalendar',
                          array(
                           'inputField'=>'DATEFIN',
                            'ifFormat'=>'%Y-%m-%d',
                            )); ?>
            <?php echo $form->error($model,'DATEFIN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Créer' : 'Enregistrer'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->