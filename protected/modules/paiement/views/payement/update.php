<?php
/* @var $this PayementController */
/* @var $model Payement */

$this->breadcrumbs=array(
	'Payements'=>array('index'),
	$model->payement_id=>array('view','id'=>$model->payement_id),
	'Modifier',
);

$this->menu=array(
	array('label'=>'Consulter les paiements', 'url'=>array('index')),
	array('label'=>'Créer un paiement', 'url'=>array('create')),
	array('label'=>'Consulter le paiement', 'url'=>array('view', 'id'=>$model->payement_id)),
	array('label'=>'Gérer les paiements', 'url'=>array('admin')),
);
?>

<h1>Modification du paiement <?php echo $model->payement_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>