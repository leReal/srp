<?php
/* @var $this UtilisateursController */
/* @var $model Utilisateurs */

$this->breadcrumbs=array(
	'Utilisateurs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Utilisateurs', 'url'=>array('index')),
	array('label'=>'Manage Utilisateurs', 'url'=>array('admin')),
);
?>

<h1>Create Utilisateurs</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>