<?php
/* @var $this TypepaiementsController */
/* @var $model Typepaiements */

$this->breadcrumbs=array(
	'Typepaiements'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Typepaiements', 'url'=>array('index')),
	array('label'=>'Manage Typepaiements', 'url'=>array('admin')),
);
?>

<h1>Create Typepaiements</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>