<?php
/* @var $this EnseignantsController */
/* @var $model Enseignants */

$this->breadcrumbs=array(
	'Enseignants'=>array('index'),
	$model->NOM=>array('view','id'=>$model->ESEIGNANT_ID),
	'Modifier',
);

$this->menu=array(
	array('label'=>'Liste des enseignants', 'url'=>array('index')),
	array('label'=>'Créer un enseignant', 'url'=>array('create')),
	array('label'=>'Consulter l\' enseignant', 'url'=>array('view', 'id'=>$model->ESEIGNANT_ID)),
	array('label'=>'Gérer les enseignants', 'url'=>array('admin')),
);
?>

<h1>Modifier l'enseignant : <?php echo $model->NOM; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>