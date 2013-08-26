<?php
/* @var $this ExamensController */
/* @var $data Examens */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('EXAMEN_ID')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->EXAMEN_ID), array('view', 'id'=>$data->EXAMEN_ID)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NOM')); ?>:</b>
	<?php echo CHtml::encode($data->NOM); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANNEEACADEMIQUE_ID')); ?>:</b>
	<?php

        if(Anneeacademiques::model()->findByPk($data->ANNEEACADEMIQUE_ID) instanceof  Anneeacademiques)
                $lib_annee = Anneeacademiques::model()->findByPk($data->ANNEEACADEMIQUE_ID)->getAttribute('LIB_ANN');
        else
            $lib_annee = $data->ANNEEACADEMIQUE_ID;
        echo CHtml::encode($lib_annee);
        ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COURS_ID')); ?>:</b>
	<?php 
        if(Cours::model()->findByPk($data->COURS_ID) instanceof  Cours)
                $lib_class = Cours::model()->findByPk($data->COURS_ID)->getAttribute('NOM');
        else
            $lib_class = $data->COURS_ID;
        echo CHtml::encode($lib_class);
       
        ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('DATE_DEB')); ?>:</b>
	<?php echo CHtml::encode($data->DATE_DEB); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLASSE_ID')); ?>:</b>
	<?php

        if(Classes::model()->findByPk($data->CLASSE_ID) instanceof  Classes)
                $lib_class = Classes::model()->findByPk($data->CLASSE_ID)->getAttribute('NOM');
        else
            $lib_class = $data->CLASSE_ID;
        echo CHtml::encode($lib_class);
        ?>
	<br />


</div>