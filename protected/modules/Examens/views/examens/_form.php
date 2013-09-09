<?php
/* @var $this ExamensController */
/* @var $model Examens */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'examens-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Les champs avec la marque <span class="required">*</span> sont obligatoires.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'NOM'); ?>
		<?php echo $form->textField($model,'NOM',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'NOM'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'ANNEEACADEMIQUE_ID'); ?>
		<?php
                echo $form->dropDownList($model, 'ANNEEACADEMIQUE_ID',
                    CHtml::listData(Anneeacademiques::model()->findAll(),'ANNEEACADEMIQUE_ID','LIB_ANN')
                    );
                //echo $form->textField($model,'ANNEEACADEMIQUE_ID');
                ?>
		<?php
                //echo $form->error($model,'ANNEEACADEMIQUE_ID');

                ?>
	</div>

        <div class="row">
		<?php echo $form->labelEx($model,'CLASSE_ID'); ?>
		<?php
                echo $form->dropDownList($model, 'CLASSE_ID',
                    CHtml::listData(Classes::model()->findAll(),'CLASSE_ID','NOM')
                    );
                //echo $form->textField($model,'CLASSE_ID');
                ?>

	</div>
        
	<div class="row">
		<?php echo $form->labelEx($model,'COURS_ID'); ?>
		<?php //echo $form->textField($model,'COURS_ID');
                 echo $form->dropDownList($model, 'COURS_ID',
                    CHtml::listData(Cours::model()->findAll(),'COURS_ID','NOM')
                    );
                ?>
		<?php echo $form->error($model,'COURS_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'DATE_DEB'); ?>
		<?php //echo $form->textField($model,'DATE_DEB');
                    echo CHtml::activeTextField($model,'DATE_DEB',array("id"=>"DATE_DEB"));
                    $this->widget('application.extensions.calendar.SCalendar',
        array(
        'inputField'=>'DATE_DEB',
        'ifFormat'=>'%Y-%m-%d',
    ));
                ?>
		<?php echo $form->error($model,'DATE_DEB'); ?>
	</div>

	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
<div class="btn-toolbar">
    <?php
    Yii::app()->bootstrap->register();
     ?>
</div>