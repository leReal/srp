<?php
/* @var $this PayementController */
/* @var $model Payement */

$this->breadcrumbs=array(
	'Paiements'=>array('index'),
	$model->payement_id,
);

$this->menu=array(
	array('label'=>'Consulter les paiements', 'url'=>array('index')),
	array('label'=>'Créer un paiement', 'url'=>array('create')),
	array('label'=>'Modifier le paiement', 'url'=>array('update', 'id'=>$model->payement_id)),
	array('label'=>'Supprimer le paiement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->payement_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gérer les paiements', 'url'=>array('admin')),
        array('label'=>'Générer le reçu de paiement', 'url'=>array('jasper', 'id'=>$model->payement_id)),
);
?>

<h1>Détails du paiement <?php echo $model->payement_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'payement_id',
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
	'data'=>$model->tYPEPAIEMENT,
	'attributes'=>array(
		'NOM:text:Type de paiement'
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
		"DATE:text:Date d'inscription",
	),
)); ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'MONTANT',
	),
)); ?>

