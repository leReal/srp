<?php
/* @var $this ClassesController */
/* @var $model Classes */

$this->breadcrumbs=array(
	'Classes'=>array('index'),
	'Créer',
);

$this->menu=array(
	array('label'=>'Liste des classes', 'url'=>array('index')),
	array('label'=>'Gérer les classes', 'url'=>array('admin')),
);
?>

<h1>Create Classes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>