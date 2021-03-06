<?php
/* @var $this PayementController */
/* @var $model Payement */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

        <div class="row">
		<?php echo $form->label($model,'payement_id'); ?>
		<?php echo $form->textField($model,'payement_id',array('size'=>60,'maxlength'=>255)); ?>
	</div>
    
	<div class="row">
		<?php echo $form->label($model,'ANNEEACADEMIQUE_ID'); ?>
		<?php echo $form->dropDownList($model,'ANNEEACADEMIQUE_ID',CHtml::listData(Anneeacademiques::model()->findAll(),'ANNEEACADEMIQUE_ID', 'DATEDEB'),
                        array('empty' => "Sélectionnez l'année académique dans la liste")); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ELEVE_ID'); ?>
		<?php echo $form->dropDownList($model,'ELEVE_ID',CHtml::listData(Eleves::model()->findAll(),'ELEVE_ID', 'NOM'),
                        array('empty' => "Sélectionnez l'élève dans la liste")); ?>
	</div>
    
        <div class="row">
		<?php echo $form->label($model,'CLASSE_ID'); ?>
		<?php echo $form->dropDownList($model,'CLASSE_ID',CHtml::listData(Classes::model()->findAll(),'CLASSE_ID', 'NOM'),
                        array('empty' => "Sélectionnez la classe dans la liste")); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TYPE_PAIEMENT_ID'); ?>
		<?php echo $form->dropDownList($model,'TYPE_PAIEMENT_ID',CHtml::listData(Typepaiements::model()->findAll(),'TYPE_PAIEMENT_ID', 'NOM'),
                        array('empty' => "Sélectionnez un type de paiement dans la liste")); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ETABLISSEMENT_ID'); ?>
		<?php echo $form->dropDownList($model,'ETABLISSEMENT_ID',CHtml::listData(Etablissements::model()->findAll(),'ETABLISSEMENT_ID', 'NOM'),
                        array('empty' => "Sélectionnez l'établissement classe dans la liste")); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MONTANT'); ?>
		<?php echo $form->textField($model,'MONTANT',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Rechercher'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->