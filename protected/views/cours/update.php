<?php
/* @var $this CoursController */
/* @var $model Cours */

$this->breadcrumbs=array(
	'Cours'=>array('index'),
	$model->NOM=>array('view','id'=>$model->COURS_ID),
	'Modifier',
);

$this->menu=array(
	array('label'=>'Liste des Cours', 'url'=>array('index')),
	array('label'=>'Créer un cours', 'url'=>array('create')),
	array('label'=>'Consulter le cours', 'url'=>array('view', 'id'=>$model->COURS_ID)),
	array('label'=>'Gérer les cours', 'url'=>array('admin')),
);
?>

<h1>Modifier le cours <?php echo $model->NOM; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>