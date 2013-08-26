<?php
/* @var $this EnseignantsController */
/* @var $model Enseignants */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ESEIGNANT_ID'); ?>
		<?php echo $form->textField($model,'ESEIGNANT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ETABLISSEMENT_ID'); ?>
		<?php echo  $form->dropDownList($model,'ETABLISSEMENT_ID',CHtml::listData(Etablissements::model()->findAll(), 'ETABLISSEMENT_ID', 'NOM')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'STATUT_ID'); ?>
		<?php echo $form->dropDownList($model,'STATUT_ID',CHtml::listData(Statuts::model()->findAll(), 'STATUT_ID', 'NOM')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOM'); ?>
		<?php echo $form->textField($model,'NOM',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PRENOM'); ?>
		<?php echo $form->textField($model,'PRENOM',array('size'=>60,'maxlength'=>255)); ?>
	</div>

   <?php /*<div class="row">
		<?php echo $form->label($model,'LOGIN'); ?>
		<?php echo $form->textField($model,'LOGIN',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'PASSWORD'); ?>
		<?php echo $form->passwordField($model,'PASSWORD',array('size'=>60,'maxlength'=>255)); ?>
	</div> */?>

	<div class="row">
		<?php echo $form->label($model,'TELEPHONE'); ?>
		<?php echo $form->textField($model,'TELEPHONE',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Rechercher'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->