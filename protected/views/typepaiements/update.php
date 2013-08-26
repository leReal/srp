<?php
/* @var $this TypepaiementsController */
/* @var $model Typepaiements */

$this->breadcrumbs=array(
	'Typepaiements'=>array('index'),
	$model->TYPE_PAIEMENT_ID=>array('view','id'=>$model->TYPE_PAIEMENT_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Typepaiements', 'url'=>array('index')),
	array('label'=>'Create Typepaiements', 'url'=>array('create')),
	array('label'=>'View Typepaiements', 'url'=>array('view', 'id'=>$model->TYPE_PAIEMENT_ID)),
	array('label'=>'Manage Typepaiements', 'url'=>array('admin')),
);
?>

<h1>Update Typepaiements <?php echo $model->TYPE_PAIEMENT_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>