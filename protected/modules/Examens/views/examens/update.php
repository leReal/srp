<?php
/* @var $this ExamensController */
/* @var $model Examens */

$this->breadcrumbs=array(
	'Examens'=>array('index'),
	$model->EXAMEN_ID=>array('view','id'=>$model->EXAMEN_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Liste des examens', 'url'=>array('index')),
	array('label'=>'Créer un examen', 'url'=>array('create')),
	array('label'=>'Consulter un examen', 'url'=>array('view', 'id'=>$model->EXAMEN_ID)),
	array('label'=>'Gérer les examens', 'url'=>array('admin')),
);
?>

<h1>Modifier un examen <?php echo $model->EXAMEN_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>