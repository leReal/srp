<?php
/* @var $this EnseignerController */
/* @var $model Enseigner */

$this->breadcrumbs=array(
	'Enseigners'=>array('index'),
	$model->enseigner_id=>array('view','id'=>$model->enseigner_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Enseigner', 'url'=>array('index')),
	array('label'=>'Create Enseigner', 'url'=>array('create')),
	array('label'=>'View Enseigner', 'url'=>array('view', 'id'=>$model->enseigner_id)),
	array('label'=>'Manage Enseigner', 'url'=>array('admin')),
);
?>

<h1>Update Enseigner <?php echo $model->enseigner_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>