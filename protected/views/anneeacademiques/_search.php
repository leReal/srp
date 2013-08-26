<?php
/* @var $this AnneeacademiquesController */
/* @var $model Anneeacademiques */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ANNEEACADEMIQUE_ID'); ?>
		<?php echo $form->textField($model,'ANNEEACADEMIQUE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ETABLISSEMENT_ID'); ?>
		<?php echo $form->textField($model,'ETABLISSEMENT_ID'); ?>   
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATEDEB'); ?>
		<?php echo $form->textField($model,'DATEDEB'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATEFIN'); ?>
		<?php echo $form->textField($model,'DATEFIN'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Rechercher'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->