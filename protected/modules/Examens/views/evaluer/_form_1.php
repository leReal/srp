<?php
/* @var $this EvaluerController */
/* @var $model Evaluer_To_Save */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'evaluer_to_save-form',
	'enableAjaxValidation'=>false,
));
Yii::app()->bootstrap->register();
?>

	<p class="note">Les champs avec la marque <span class="required">*</span> sont oligatoires.</p>

	<?php echo $form->errorSummary($model->TO_SAVE2[0]); ?>


<div id="les_eleves" class="view">
<?php


//    echo 'Nombre d\'éléments trouvés : '.count($model->TO_SAVE2);
    $exam = Examens::model()->find('EXAMEN_ID=:examenID', array(':examenID'=>$model->TO_SAVE2[0]->getAttribute('EXAMEN_ID')));
    echo '<br>Examen : <b>'.$exam->getAttribute('NOM').'      #'.count($model->TO_SAVE2).'</b>';
    $modelInscrp=new Inscription();

    if(count($model->TO_SAVE2) > 0){

        $i = 0;
       // echo '<form name="EVALUER_TO_SAVE2">';
        echo '<table border="1"><tr><th>Nom de l\'élève</th><th>Moyenne</th><th>Observation</th></tr>';
        foreach ($model->TO_SAVE2 as $value) {
            
            $eleve2 = Eleves::model()->find('ELEVE_ID=:eleveID', array(':eleveID'=>$value->getAttribute('ELEVE_ID')));
            echo '<tr><td>';
            echo CHtml::encode($eleve2->getAttribute('NOM'));
            echo '</td>';

            echo '<td>';
            echo '<input type="text" name="MOY'.$i.'"  value='.$value->getAttribute('MOYENE').' >';
            echo '</td>';

            echo '<td>';
            echo '<input type="text" name="OBS'.$i.'"  value='.$value->getAttribute('OBSERV').' >';

             echo '<input type="hidden" name="ELEVE_ID'.$i.'" value='.$value->getAttribute('ELEVE_ID').'>';
             echo '<input type="hidden" name="ANNEEACADEMIQUE_ID'.$i.'" value='.$value->getAttribute('ANNEEACADEMIQUE_ID').'>';
             echo '<input type="hidden" name="COURS_ID'.$i.'" value='.$value->getAttribute('COURS_ID').'>';
             echo '<input type="hidden" name="EXAMEN_ID'.$i.'" value='.$value->getAttribute('EXAMEN_ID').'>';
             echo '<input type="hidden" name="ETABLISSEMENT_ID'.$i.'" value='.$value->getAttribute('ETABLISSEMENT_ID').'>';
             echo '<input type="hidden" name="CLASSE_ID'.$i.'" value='.$value->getAttribute('CLASSE_ID').'>';

             $isNewRecord =  ($value->getIsNewRecord() ? 1 : 0);
             echo '<input type="hidden" name="NEW_RECORD'.$i.'" value='.$isNewRecord.' >';
            echo '</td>';

            echo '</tr>';

            $i++;
        }
        echo '</table>';
        echo '<input type="hidden" name="NB_ENREG" value='.$i.'/>';
       // echo '</form>';


    }else{
        echo '<div class="view">Plus d\'un élément trouvé !</div>';
    }


?>
    </div>

	<div class="row buttons">
		<?php //echo CHtml::submitButton($model->isNewRecord ? 'Enregistrer' : 'Save');
                
                        echo CHtml::button('Enregistrer',
                        array('submit' => array('evaluer/create_1')));

                        echo CHtml::button('Annuler',
                        array('submit' => array('evaluer/annuler_1')));
                
                ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
