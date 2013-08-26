<?php
/* @var $this PayementController */
/* @var $model Payement */

$this->breadcrumbs=array(
	'Paiements'=>array('index'),
	'Créer',
);

$this->menu=array(
	array('label'=>'Consulter les paiements', 'url'=>array('index')),
	array('label'=>'Gérer les paiements', 'url'=>array('admin')),
);
?>

<h1>Création des paiements</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>