<?php
/* @var $this TypepaiementsController */
/* @var $model Typepaiements */

$this->breadcrumbs=array(
	'Types de paiement'=>array('index'),
	$model->TYPE_PAIEMENT_ID,
);

$this->menu=array(
	array('label'=>'Consulter les types de paiement', 'url'=>array('index')),
	array('label'=>'Créer un type de paiement', 'url'=>array('create')),
	array('label'=>'Modifier un type de paiement', 'url'=>array('update', 'id'=>$model->TYPE_PAIEMENT_ID)),
	array('label'=>'Supprimer un type de paiement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TYPE_PAIEMENT_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gérer les types de paiement', 'url'=>array('admin')),
);
?>

<h1>Détails du type de paiement #<?php echo $model->TYPE_PAIEMENT_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TYPE_PAIEMENT_ID',
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
		'NOM',
                'TPYE'
	),
)); ?>
