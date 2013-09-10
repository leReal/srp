<?php
/* @var $this EnseignerController */
/* @var $model Enseigner */
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
		<?php echo $form->label($model,'ANNEEACADEMIQUE_ID'); ?>
		<?php echo $form->textField($model,'ANNEEACADEMIQUE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLASSE_ID'); ?>
		<?php echo $form->textField($model,'CLASSE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COURS_ID'); ?>
		<?php echo $form->textField($model,'COURS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ETABLISSEMENT_ID'); ?>
		<?php echo $form->textField($model,'ETABLISSEMENT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ROLE'); ?>
		<?php echo $form->textField($model,'ROLE',array('size'=>60,'maxlength'=>250)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'enseigner_id'); ?>
		<?php echo $form->textField($model,'enseigner_id',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->