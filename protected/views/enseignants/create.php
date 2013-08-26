<?php
/* @var $this EnseignantsController */
/* @var $model Enseignants */

$this->breadcrumbs=array(
	'Enseignants'=>array('index'),
	'Créer',
);

$this->menu=array(
	array('label'=>'Liste des enseignants', 'url'=>array('index')),
	array('label'=>'Gérer les enseignants', 'url'=>array('admin')),
);
?>

<h1>Créer un enseignants</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>