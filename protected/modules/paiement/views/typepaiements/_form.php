<?php
/* @var $this TypepaiementsController */
/* @var $model Typepaiements */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'typepaiements-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Les champs avec <span class="required">*</span> sont obligatoires.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NOM'); ?>
		<?php echo $form->textField($model,'NOM',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NOM'); ?>
	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'TPYE'); ?>
             <?php echo $form->dropDownList($model,'TPYE',array('1'=>'Crédit','0'=>'Débit'),
                        array('empty' => 'Sélectionnez un type dans la liste')); ?>
		<?php echo $form->error($model,'TPYE'); ?>
	</div>
        
        <div class="row">
		<?php echo $form->labelEx($model,'ETABLISSEMENT_ID'); ?>
		 <?php echo $form->dropDownList($model,'ETABLISSEMENT_ID',CHtml::listData(Etablissements::model()->findAll(),'ETABLISSEMENT_ID', 'NOM'),
                        array('empty' => 'Sélectionnez un établissement dans la liste')); ?>
		<?php echo $form->error($model,'TPYE'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enregistrer' : 'Enregistrer'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->