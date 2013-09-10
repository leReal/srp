<?php
/* @var $this EnseignerController */
/* @var $model Enseigner */

$this->breadcrumbs=array(
	'Enseigners'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Enseigner', 'url'=>array('index')),
	array('label'=>'Manage Enseigner', 'url'=>array('admin')),
);
?>

<h1>Create Enseigner</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>