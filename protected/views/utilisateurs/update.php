<?php
/* @var $this UtilisateursController */
/* @var $model Utilisateurs */

$this->breadcrumbs=array(
	'Utilisateurs'=>array('index'),
	$model->utilisateur_id=>array('view','id'=>$model->utilisateur_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Utilisateurs', 'url'=>array('index')),
	array('label'=>'Create Utilisateurs', 'url'=>array('create')),
	array('label'=>'View Utilisateurs', 'url'=>array('view', 'id'=>$model->utilisateur_id)),
	array('label'=>'Manage Utilisateurs', 'url'=>array('admin')),
);
?>

<h1>Update Utilisateurs <?php echo $model->utilisateur_id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>