<?php
/* @var $this InscriptionController */
/* @var $model Inscription */

$this->breadcrumbs=array(
	'Inscriptions'=>array('index'),
	$model->inscription_id,
);

$this->menu=array(
	array('label'=>'Consulter les inscriptions', 'url'=>array('index')),
	array('label'=>'Créer une inscription', 'url'=>array('create')),
	array('label'=>'Modifier une inscription', 'url'=>array('update', 'id'=>$model->inscription_id)),
	array('label'=>'Supprimer une inscription', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->inscription_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gérer les inscriptions', 'url'=>array('admin')),
);
?>

<h1>Détails de l'inscription <?php echo $model->inscription_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'inscription_id',
	),
)); ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->aNNEEACADEMIQUE,
	'attributes'=>array(
		'DATEDEB:text:Année académique',
	),
)); ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->eLEVE,
	'attributes'=>array(
		"NOM:text:Noms de l'élève",
	),
)); ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->eLEVE,
	'attributes'=>array(
		"PRENOM:text:Prénoms de l'élève",
	),
)); ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->cLASSE,
	'attributes'=>array(
		'NOM:text:Classe',
	),
)); ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->eTABLISSEMENT,
	'attributes'=>array(
		'NOM:text:Etablissement',
	),
)); ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		"DATE:text:Date de l'inscription",
	),
)); ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NUMERO',
	),
)); ?>

