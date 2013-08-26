<?php
/* @var $this SocietesController */
/* @var $model Societes */

$this->breadcrumbs=array(
	'Societes'=>array('index'),
	$model->SOCIETE_ID=>array('view','id'=>$model->SOCIETE_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Societes', 'url'=>array('index')),
	array('label'=>'Create Societes', 'url'=>array('create')),
	array('label'=>'View Societes', 'url'=>array('view', 'id'=>$model->SOCIETE_ID)),
	array('label'=>'Manage Societes', 'url'=>array('admin')),
);
?>

<h1>Update Societes <?php echo $model->SOCIETE_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>