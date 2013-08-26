<?php
/* @var $this ElevesController */
/* @var $model Eleves */

$this->breadcrumbs=array(
	'Eleves'=>array('index'),
	$model->NOM=>array('view','id'=>$model->ELEVE_ID),
	'Modifier',
);

$this->menu=array(
	array('label'=>'Liste des élèves', 'url'=>array('index')),
	array('label'=>'Créer un élève', 'url'=>array('create')),
	array('label'=>'Consulter l\' élève', 'url'=>array('view', 'id'=>$model->ELEVE_ID)),
	array('label'=>'Gérer les élèves', 'url'=>array('admin')),
);
?>

<h1>Modifier l' élèves : <?php echo $model->NOM; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>