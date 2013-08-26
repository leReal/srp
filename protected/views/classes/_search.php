<?php
/* @var $this ClassesController */
/* @var $model Classes */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'CLASSE_ID'); ?>
		<?php echo $form->textField($model,'CLASSE_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ETABLISSEMENT_ID'); ?>
		<?php echo  $form->dropDownList($model,'ETABLISSEMENT_ID',CHtml::listData(Etablissements::model()->findAll(), 'ETABLISSEMENT_ID', 'NOM')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOM'); ?>
		<?php echo $form->textField($model,'NOM',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NIVEAU'); ?>
		<?php echo $form->textField($model,'NIVEAU',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'FRAIS_SCOLARITE'); ?>
		<?php echo $form->textField($model,'FRAIS_SCOLARITE',array('size'=>10,'maxlength'=>10)); ?>
	</div>

	<?php /*<div class="row">
		<?php echo $form->label($model,'MOYENE'); ?>
		<?php echo $form->textField($model,'MOYENE',array('size'=>10,'maxlength'=>10)); ?>
	</div> */?>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Rechercher'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->