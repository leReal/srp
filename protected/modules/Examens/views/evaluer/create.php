<?php
/* @var $this EvaluerController */
/* @var $model Evaluer */

$this->breadcrumbs=array(
	'Gestion des notes'=>array('index'),
	'Attribuer les notes',
);

$this->menu=array(
	array('label'=>'Liste des notes', 'url'=>array('index')),
	array('label'=>'Gérer les notes', 'url'=>array('admin')),
);
?>

<h1>Attribuer les notes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>