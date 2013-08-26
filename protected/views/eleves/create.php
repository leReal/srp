<?php
/* @var $this ElevesController */
/* @var $model Eleves */

$this->breadcrumbs=array(
	'Eleves'=>array('index'),
	'Créer',
);

$this->menu=array(
	array('label'=>'Liste des élèves', 'url'=>array('index')),
	array('label'=>'Gérer les élèves', 'url'=>array('admin')),
);
?>

<h1>Créer un élèves</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>