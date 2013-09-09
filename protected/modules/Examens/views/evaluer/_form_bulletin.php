<?php
/* @var $this EvaluerController */
/* @var $model Evaluer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'evaluer-form',
	'enableAjaxValidation'=>false,
));
Yii::app()->bootstrap->register();
?>

	<p class="note">Les champs avec la marque <span class="required">*</span> sont oligatoires.</p>

	<?php echo $form->errorSummary($model); ?>


         <table width="200" border="0">
  <tr>
    <td><?php echo $form->labelEx($model,'CLASSE_ID'); ?></td>
    <td><?php echo $form->labelEx($model,'COURS_ID'); ?></td>
    <td><?php echo $form->labelEx($model,'EXAMEN_ID'); ?></td>
    <td><?php echo $form->labelEx($model,'ELEVE_ID'); ?></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>
    	<?php
                echo $form->dropDownList($model, 'CLASSE_ID',
                    CHtml::listData(Classes::model()->findAll(),'CLASSE_ID','NOM')
                    );
                ?>
    </td>
    <td><?php
                echo $form->dropDownList($model, 'COURS_ID',
                    CHtml::listData(Cours::model()->findAll(),'COURS_ID','NOM')
                    );
                ?>
    </td>
    <td><?php
                echo $form->dropDownList($model, 'EXAMEN_ID',
                    CHtml::listData(Examens::model()->findAll(),'EXAMEN_ID','NOM')
                    );
                ?>
    </td>
    <td><?php
                echo $form->dropDownList($model, 'ELEVE_ID',
                    CHtml::listData(Eleves::model()->findAll(),'ELEVE_ID','NOM')
                    );
                ?>
    </td>
    <td><div>
		<?php

              
                        echo CHtml::button('Génerer bulletin',
                        array('submit' => array('evaluer/ReportBulletin')));

                        echo CHtml::button('Annuler',
                        array('submit' => array('evaluer/afficherPageRapport')));
                  ?>
	</div></td>
  </tr>
</table>


<?php $this->endWidget(); ?>

</div><!-- form -->
