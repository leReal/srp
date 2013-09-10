<?php
/* @var $this EnseignerController */
/* @var $data Enseigner */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('enseigner_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->enseigner_id), array('view', 'id'=>$data->enseigner_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ESEIGNANT_ID')); ?>:</b>
	<?php $model=Enseignants::model()->findAll();
		foreach($model as $post){
		if($post->ESEIGNANT_ID == $data->ESEIGNANT_ID){
			echo $post->NOM;
		}
	}
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ANNEEACADEMIQUE_ID')); ?>:</b>
	<?php $model=Anneeacademiques::model()->findAll();
		foreach($model as $post){
		if($post->ANNEEACADEMIQUE_ID == $data->ANNEEACADEMIQUE_ID){
			echo $post->DATEDEB.' - '.$post->DATEFIN;
		}
	}
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('CLASSE_ID')); ?>:</b>
	<?php $model=CLASSES::model()->findAll();
		foreach($model as $post){
		if($post->CLASSE_ID == $data->CLASSE_ID){
			echo $post->NOM;
		}
	}
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('COURS_ID')); ?>:</b>
	<?php $model=COURS::model()->findAll();
		foreach($model as $post){
		if($post->COURS_ID == $data->COURS_ID){
			echo $post->NOM;
		}
	}
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ETABLISSEMENT_ID')); ?>:</b>
	<?php $model=ETABLISSEMENTS::model()->findAll();
		foreach($model as $post){
		if($post->ETABLISSEMENT_ID == $data->ETABLISSEMENT_ID){
			echo $post->NOM;
		}
	}
	?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ROLE')); ?>:</b>
	<?php echo CHtml::encode($data->ROLE); ?>
	<br />


</div>