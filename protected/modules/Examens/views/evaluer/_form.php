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
    echo 'Nombre d\'éléments enregistrés : '.count($this->listeEltsAEnregistrer);

    $modelInscrp=new Inscription();

    if(count($this->listeEltsAEnregistrer) > 0){
        //$value = $this->listeEltsAEnregistrer[0];
        $classe = Classes::model()->find('CLASSE_ID=:classeID', array(':classeID'=>$model->getAttribute('CLASSE_ID')));
        $cours = Cours::model()->find('COURS_ID=:coursID', array(':coursID'=>$model->getAttribute('COURS_ID')));
        $exam = Examens::model()->find('EXAMEN_ID=:examID', array(':examID'=>$model->getAttribute('EXAMEN_ID')));

        //echo '<br><br>Classe : '.$classe->getAttribute('NOM').' -- Cours : '.$cours->getAttribute('NOM').' -- Examen : '.$exam->getAttribute('NOM');

        echo '<table border="1"><tr><th>Nom de l\'élève</th><th>Moyenne</th><th>Observation</th></tr>br>';

        foreach ($this->listeEltsAEnregistrer as $value) {
            array(
                'ELEVE_ID'=>$value->getAttribute('ELEVE_ID'),
                'MOYENNE'=>$value->getAttribute('ELEVE_ID'),);
            $eleve2 = Eleves::model()->find('ELEVE_ID=:eleveID', array(':eleveID'=>$value->getAttribute('ELEVE_ID')));
            echo '<tr><td>';
            echo CHtml::encode($eleve2->getAttribute('NOM'));
            echo '</td>';

            echo '<td>';
            echo $form->textField($value,'MOYENE');
            echo '</td>';

            echo '<td>';
            echo $form->textField($value,'OBSERV');
            echo '</td>';

            echo '</tr>';
            
//            echo '<div  class="view">';
//            echo $form->labelEx($modelInscrp,'ELEVE_ID');
//            echo CHtml::encode($eleve2->getAttribute('NOM'));
//            echo '<br />';
//
//            echo $form->labelEx($value,'MOYENE');
//            echo $form->textField($value,'MOYENE');
//            echo $form->error($value,'MOYENE');
//
//            echo $form->labelEx($value,'OBSERV');
//            echo $form->textField($value,'OBSERV');
//            echo $form->error($value,'OBSERV');
//
//            echo '<br />';
//            echo '</div>';
        }
        echo '</table>';
  
        
      
    }else{
        echo '<div class="view">Veuillez rechercher les élèves à qui attribuer les notes !</div>';
    }
}

?>
    </div>



<?php $this->endWidget(); ?>

</div><!-- form -->
