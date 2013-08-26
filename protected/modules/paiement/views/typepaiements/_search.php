<?php
/* @var $this TypepaiementsController */
/* @var $model Typepaiements */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'TYPE_PAIEMENT_ID'); ?>
		<?php echo $form->textField($model,'TYPE_PAIEMENT_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'ETABLISSEMENT_ID'); ?>
            <?php echo $form->dropDownList($model,'ETABLISSEMENT_ID',CHtml::listData(Etablissements::model()->findAll(),'ETABLISSEMENT_ID', 'NOM'),
                        array('empty' => 'Sélectionnez un établissement dans la liste')); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NOM'); ?>
		<?php echo $form->textField($model,'NOM',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'TPYE'); ?>
		<?php echo $form->dropDownList($model,'TPYE',array('1'=>'Crédit','0'=>'Débit'),
                        array('empty' => 'Sélectionnez un type dans la liste')); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Rechercher'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->