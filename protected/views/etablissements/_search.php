<?php
/* @var $this EtablissementsController */
/* @var $model Etablissements */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'ETABLISSEMENT_ID'); ?>
		<?php echo $form->textField($model,'ETABLISSEMENT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'SOCIETE_ID'); ?>
		<?php echo $form->dropDownList($model,'SOCIETE_ID',CHtml::listData(Societes::model()->findAll(), 'SOCIETE_ID', 'NOM')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOM'); ?>
		<?php echo $form->textField($model,'NOM',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'DESCRIPTION'); ?>
		<?php echo $form->textArea($model,'DESCRIPTION',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Rechercher'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->