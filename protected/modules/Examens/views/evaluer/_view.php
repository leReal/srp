<?php
/* @var $this EvaluerController */
/* @var $data Evaluer */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EXAMEN_ID')); ?>:</b>
	<?php
            //echo CHtml::link(CHtml::encode($data->EXAMEN_ID), array('view', 'id'=>$data->EXAMEN_ID));
            
            if(Examens::model()->findByPk($data->EXAMEN_ID) instanceof  Examens)
                $lib = Examens::model()->findByPk($data->EXAMEN_ID)->getAttribute('NOM');
            else
                $lib = $data->EXAMEN_ID;
        
        echo CHtml::link(CHtml::encode($lib), array('view', 'id'=>$data->EXAMEN_ID));
        ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ELEVE_ID')); ?>:</b>
	<?php 
            
            $eleve = Eleves::model()->findByPk($data->ELEVE_ID);
            if($eleve instanceof  Eleves)
                $lib = $eleve->getAttribute('NOM').' '.$eleve->getAttribute('PRENOM');
            else
                $lib = $data->ELEVE_ID;

            echo CHtml::encode($lib);
        ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANNEEACADEMIQUE_ID')); ?>:</b>
	<?php //echo CHtml::encode($data->ANNEEACADEMIQUE_ID);

            $var = Anneeacademiques::model()->findByPk($data->ANNEEACADEMIQUE_ID);
            if($var instanceof  Anneeacademiques)
                $lib = $var->getAttribute('LIB_ANN');
            else
                $lib = $data->ANNEEACADEMIQUE_ID;

            echo CHtml::encode($lib);
        ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COURS_ID')); ?>:</b>
	<?php //echo CHtml::encode($data->COURS_ID);

             $var = Cours::model()->findByPk($data->COURS_ID);
            if($var instanceof  Cours)
                $lib = $var->getAttribute('NOM');
            else
                $lib = $data->COURS_ID;

            echo CHtml::encode($lib);
        ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('EXAMEN_ID')); ?>:</b>
	<?php echo CHtml::encode($data->EXAMEN_ID);


        ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('MOYENE')); ?>:</b>
	<?php echo CHtml::encode($data->MOYENE); ?>
	<br />

        <b><?php echo CHtml::encode($data->getAttributeLabel('OBSERV')); ?>:</b>
	<?php echo CHtml::encode($data->OBSERV); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE')); ?>:</b>
	<?php echo CHtml::encode($data->DATE); ?>
	<br />

	<?php /*
	

<b><?php echo CHtml::encode($data->getAttributeLabel('ETABLISSEMENT_ID')); ?>:</b>
	<?php echo CHtml::encode($data->ETABLISSEMENT_ID); ?>
	<br />
         *
	<b><?php echo CHtml::encode($data->getAttributeLabel('CLASSE_ID')); ?>:</b>
	<?php echo CHtml::encode($data->CLASSE_ID); ?>
	<br />

	

	*/ ?>

</div>