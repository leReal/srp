<?php
/* @var $this CoursController */
/* @var $model Cours */

$this->breadcrumbs=array(
	'Cours'=>array('index'),
	'Créer',
);

$this->menu=array(
	array('label'=>'Liste des cours', 'url'=>array('index')),
	array('label'=>'Gérer les Cours', 'url'=>array('admin')),
);
?>

<h1>Créer un cours</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>