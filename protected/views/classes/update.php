<?php
/* @var $this ClassesController */
/* @var $model Classes */

$this->breadcrumbs=array(
	'Classes'=>array('index'),
	$model->NOM=>array('view','id'=>$model->NOM),
	'Modifier',
);

$this->menu=array(
	array('label'=>'Liste des Classes', 'url'=>array('index')),
	array('label'=>'Créer une classe', 'url'=>array('create')),
	array('label'=>'Consulter la classe', 'url'=>array('view', 'id'=>$model->CLASSE_ID)),
	array('label'=>'Gérer les classes', 'url'=>array('admin')),
);
?>

<h1>Modifier la  classe <?php echo $model->NOM; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>