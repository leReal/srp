<?php
/* @var $this SocietesController */
/* @var $model Societes */

$this->breadcrumbs=array(
	'Societes'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Societes', 'url'=>array('index')),
	array('label'=>'Manage Societes', 'url'=>array('admin')),
);
?>

<h1>Create Societes</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>