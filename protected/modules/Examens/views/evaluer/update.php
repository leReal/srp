<?php
/* @var $this EvaluerController */
/* @var $model Evaluer */

$this->breadcrumbs=array(
	'Evaluers'=>array('index'),
	$model->EVAL_ID=>array('view','id'=>$model->EVAL_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'Liste des notes', 'url'=>array('index')),
	array('label'=>'Attribuer des notes', 'url'=>array('create')),
	array('label'=>'Consulter une note', 'url'=>array('view', 'id'=>$model->EVAL_ID)),
	array('label'=>'Gérer les notes', 'url'=>array('admin')),
);
?>

<h1>Modifier une note #<?php echo $model->EVAL_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>