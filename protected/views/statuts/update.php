<?php
/* @var $this StatutsController */
/* @var $model Statuts */

$this->breadcrumbs=array(
	'Statuts'=>array('index'),
	$model->STATUT_ID=>array('view','id'=>$model->STATUT_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Statuts', 'url'=>array('index')),
	array('label'=>'Create Statuts', 'url'=>array('create')),
	array('label'=>'View Statuts', 'url'=>array('view', 'id'=>$model->STATUT_ID)),
	array('label'=>'Manage Statuts', 'url'=>array('admin')),
);
?>

<h1>Update Statuts <?php echo $model->STATUT_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>