<?php
/* @var $this EvaluerController */
/* @var $model Evaluer */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ELEVE_ID'); ?>
		<?php echo $form->textField($model,'ELEVE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ANNEEACADEMIQUE_ID'); ?>
		<?php echo $form->textField($model,'ANNEEACADEMIQUE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'COURS_ID'); ?>
		<?php echo $form->textField($model,'COURS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EXAMEN_ID'); ?>
		<?php echo $form->textField($model,'EXAMEN_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ETABLISSEMENT_ID'); ?>
		<?php echo $form->textField($model,'ETABLISSEMENT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DATE'); ?>
		<?php echo $form->textField($model,'DATE'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'MOYENE'); ?>
		<?php echo $form->textField($model,'MOYENE',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'CLASSE_ID'); ?>
		<?php echo $form->textField($model,'CLASSE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'OBSERV'); ?>
		<?php echo $form->textField($model,'OBSERV',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'EVAL_ID'); ?>
		<?php echo $form->textField($model,'EVAL_ID'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->