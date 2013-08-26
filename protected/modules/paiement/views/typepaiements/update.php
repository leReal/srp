<?php
/* @var $this TypepaiementsController */
/* @var $model Typepaiements */

$this->breadcrumbs=array(
	'Types de paiement'=>array('index'),
	$model->TYPE_PAIEMENT_ID=>array('view','id'=>$model->TYPE_PAIEMENT_ID),
	'Modifier',
);

$this->menu=array(
	array('label'=>'Consulter les types de paiement', 'url'=>array('index')),
	array('label'=>'Créer un type de paiement', 'url'=>array('create')),
	array('label'=>'View Typepaiements', 'url'=>array('view', 'id'=>$model->TYPE_PAIEMENT_ID)),
	array('label'=>'Gérer les types de paiement', 'url'=>array('admin')),
);
?>

<h1>Modification d'un type de paiement <?php echo $model->TYPE_PAIEMENT_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>