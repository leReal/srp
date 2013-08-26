<?php
/* @var $this InscriptionController */
/* @var $model Inscription */

$this->breadcrumbs=array(
	'Inscriptions'=>array('index'),
	'Créer',
);

$this->menu=array(
	array('label'=>'Consulter les inscriptions', 'url'=>array('index')),
	array('label'=>'Gérer les inscriptions', 'url'=>array('admin')),
);
?>

<h1>Création d'une inscription</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>