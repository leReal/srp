<?php
/* @var $this ElevesController */
/* @var $model Eleves */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'eleves-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Les Champs avec <span class="required">*</span> sont obligatoires.</p>

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

	<div class="row">
		<?php echo $form->labelEx($model,'DATE_NAISSANCE'); ?>
		<?php echo $form->textField($model,'DATE_NAISSANCE',array("id"=>'DATE_NAISSANCE'));
                      $this->widget('application.extensions.calendar.SCalendar',
                          array(
                           'inputField'=>'DATE_NAISSANCE',
                            'ifFormat'=>'%Y-%m-%d',
                            )); ?>
		<?php echo $form->error($model,'DATE_NAISSANCE'); ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'SEXE'); ?>
		<?php echo $form->textField($model,'SEXE',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'SEXE'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'DATE_ENREGISTREMENT'); ?>
		<?php echo $form->textField($model,'DATE_ENREGISTREMENT',array("id"=>'DATE_ENREGISTREMENT'));
                      $this->widget('application.extensions.calendar.SCalendar',
                          array(
                           'inputField'=>'DATE_ENREGISTREMENT',
                            'ifFormat'=>'%Y-%m-%d',
                            )); ?>
		<?php echo $form->error($model,'DATE_ENREGISTREMENT'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOM_PRENOM_PERE'); ?>
		<?php echo $form->textField($model,'NOM_PRENOM_PERE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NOM_PRENOM_PERE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'NOM__PRENOM_MERE'); ?>
		<?php echo $form->textField($model,'NOM__PRENOM_MERE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NOM__PRENOM_MERE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ADRESSE'); ?>
		<?php echo $form->textField($model,'ADRESSE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'ADRESSE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TELEPHONE_PERE'); ?>
		<?php echo $form->textField($model,'TELEPHONE_PERE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'TELEPHONE_PERE'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'TELEPHONE_MERE'); ?>
		<?php echo $form->textField($model,'TELEPHONE_MERE',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'TELEPHONE_MERE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Créer' : 'Enregistrer'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->