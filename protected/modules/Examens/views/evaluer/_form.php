<?php
/* @var $this EvaluerController */
/* @var $model Evaluer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'evaluer-form',
	'enableAjaxValidation'=>false,
)); ?>

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

                if ($model->isNewRecord)
                        echo CHtml::button('Rechercher',
                        array('submit' => array('evaluer/Rechercher')),
                        array('ajax' => array('update', '#les_eleves')),
                        array('onClick'=>'window.location="'.Yii::app()->getRequest()->getUrl().'"'));
                  ?>
	</div></td>
  </tr>
</table>
<div id="les_eleves" class="view">
<?php

if($model->isNewRecord){
    echo 'Nombre d\'éléments trouvés : '.count($this->listeEltsAEnregistrer);

    $modelInscrp=new Inscription();

    if(count($this->listeEltsAEnregistrer) >= 0){
       // $model = $this->listeEltsAEnregistrer[0];

        foreach ($this->listeEltsAEnregistrer as $value) {
            //$model = $value;
            echo '<div  class="view">';
            echo $form->labelEx($modelInscrp,'ELEVE_ID');
            echo CHtml::encode($value->getAttribute('ELEVE_ID'));
            echo '<br />';

            echo $form->labelEx($value,'MOYENE');
            echo $form->textField($value,'MOYENE');
            echo $form->error($value,'MOYENE');

            echo $form->labelEx($value,'OBSERV');
            echo $form->textField($value,'OBSERV');
            echo $form->error($value,'OBSERV');

            echo '<br />';
            echo '</div>';
        }
  
        
      
    }else{
        echo '<div class="view">Plus d\'un élément trouvé !</div>';
    }
}else{ // Si on est en modification
    echo '<div  class="view">';
            echo $form->labelEx($model,'ELEVE_ID');
            echo CHtml::encode($model->getAttribute('ELEVE_ID'));
            echo '<br />';

            echo $form->labelEx($model,'MOYENE');
            echo $form->textField($model,'MOYENE');
            echo $form->error($model,'MOYENE');

            echo $form->labelEx($model,'OBSERV');
            echo $form->textField($model,'OBSERV');
            echo $form->error($model,'OBSERV');

            echo '<br />';
            echo '</div>';
}

?>
    </div>

	<div class="row buttons">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Enregistrer' : 'Save');
                if($model->isNewRecord)
                        echo CHtml::button('Enregistrer',
                        array('submit' => array('evaluer/create')));
                else
                    echo CHtml::button('Modifier',
                        array('submit' => array('evaluer/update' => $model->EVAL_ID)));
                ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->