<?php
/* @var $this InscriptionController */
/* @var $model Inscription */

$this->breadcrumbs=array(
	'Inscriptions'=>array('index'),
	$model->inscription_id=>array('view','id'=>$model->inscription_id),
	'Modifier',
);

$this->menu=array(
	array('label'=>'Consulter les inscriptions', 'url'=>array('index')),
	array('label'=>'Créer une inscription', 'url'=>array('create')),
	array('label'=>'View Inscription', 'url'=>array('view', 'id'=>$model->inscription_id)),
	array('label'=>'Gérer les inscriptions', 'url'=>array('admin')),
);
?>

<h1>Modifier une inscription<?php echo $model->inscription_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>