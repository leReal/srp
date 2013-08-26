<?php
/* @var $this StatutsController */
/* @var $model Statuts */

$this->breadcrumbs=array(
	'Statuts'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Statuts', 'url'=>array('index')),
	array('label'=>'Manage Statuts', 'url'=>array('admin')),
);
?>

<h1>Create Statuts</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>