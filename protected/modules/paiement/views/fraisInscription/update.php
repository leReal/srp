<?php
/* @var $this FraisInscriptionController */
/* @var $model FraisInscription */

$this->breadcrumbs=array(
	"Frais d'nscriptions"=>array('index'),
	$model->payement_id=>array('view','id'=>$model->payement_id),
	'Modifier',
);

$this->menu=array(
	array('label'=>"Consulter la liste des paiements des frais d'inscription", 'url'=>array('index')),
	array('label'=>"Créer un paiement de frais d'inscription", 'url'=>array('create')),
	array('label'=>"Consulter le paiement de frais d'inscription", 'url'=>array('view', 'id'=>$model->payement_id)),
	array('label'=>"Gérer les paiements de frais d'inscription", 'url'=>array('admin')),
);
?>

<h1>Modifier le paiement de frais d'inscription numéro <?php echo $model->payement_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>