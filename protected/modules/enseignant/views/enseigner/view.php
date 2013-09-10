<?php
/* @var $this EnseignerController */
/* @var $model Enseigner */

$this->breadcrumbs=array(
	'Enseigners'=>array('index'),
	$model->enseigner_id,
);

$this->menu=array(
	array('label'=>'List Enseigner', 'url'=>array('index')),
	array('label'=>'Create Enseigner', 'url'=>array('create')),
	array('label'=>'Update Enseigner', 'url'=>array('update', 'id'=>$model->enseigner_id)),
	array('label'=>'Delete Enseigner', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->enseigner_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Enseigner', 'url'=>array('admin')),
);
?>

<h1>View Enseigner #<?php echo $model->enseigner_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ESEIGNANT_ID',
		'ANNEEACADEMIQUE_ID',
		'CLASSE_ID',
		'COURS_ID',
		'ETABLISSEMENT_ID',
		'ROLE',
		'enseigner_id',
	),
)); ?>
