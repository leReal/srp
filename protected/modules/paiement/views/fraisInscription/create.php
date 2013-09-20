<?php
/* @var $this FraisInscriptionController */
/* @var $model FraisInscription */

$this->breadcrumbs=array(
	"Frais d'inscription"=>array('index'),
	'Créer',
);

$this->menu=array(
	array('label'=>"Consulter les paiements des frais d'inscription", 'url'=>array('index')),
	array('label'=>"Gérer les paiements des frais d'inscription", 'url'=>array('admin')),
);
?>

<h1>Création d'un paiement de frais d'inscription</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>