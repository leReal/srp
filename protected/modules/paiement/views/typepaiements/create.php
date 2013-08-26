<?php
/* @var $this TypepaiementsController */
/* @var $model Typepaiements */

$this->breadcrumbs=array(
	'Types de paiement'=>array('index'),
	'Créer',
);

$this->menu=array(
	array('label'=>'Consulter les types de paiement', 'url'=>array('index')),
	array('label'=>'Gérer les types de paiement', 'url'=>array('admin')),
);
?>

<h1>Création d'un type de paiement</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>