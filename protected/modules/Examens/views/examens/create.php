<?php
/* @var $this ExamensController */
/* @var $model Examens */

$this->breadcrumbs=array(
	'Examens'=>array('index'),
	'Création un examen',
);

$this->menu=array(
	array('label'=>'Liste des examens', 'url'=>array('index')),
	array('label'=>'Gestion des examens', 'url'=>array('admin')),
);
?>

<h1>Création d'un examen</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>