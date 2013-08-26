<?php
/* @var $this UtilisateursController */
/* @var $model Utilisateurs */

$this->breadcrumbs=array(
	'Utilisateurs'=>array('index'),
	$model->utilisateur_id,
);

$this->menu=array(
	array('label'=>'List Utilisateurs', 'url'=>array('index')),
	array('label'=>'Create Utilisateurs', 'url'=>array('create')),
	array('label'=>'Update Utilisateurs', 'url'=>array('update', 'id'=>$model->utilisateur_id)),
	array('label'=>'Delete Utilisateurs', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->utilisateur_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Utilisateurs', 'url'=>array('admin')),
);
?>

<h1>View Utilisateurs #<?php echo $model->utilisateur_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'utilisateur_id',
		'login',
		'password',
		'nom',
		'prenom',
		'telephone',
		'portable',
		'fonction',
	),
)); ?>
