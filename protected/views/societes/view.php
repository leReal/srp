<?php
/* @var $this SocietesController */
/* @var $model Societes */

$this->breadcrumbs=array(
	'Societes'=>array('index'),
	$model->SOCIETE_ID,
);

$this->menu=array(
	array('label'=>'List Societes', 'url'=>array('index')),
	array('label'=>'Create Societes', 'url'=>array('create')),
	array('label'=>'Update Societes', 'url'=>array('update', 'id'=>$model->SOCIETE_ID)),
	array('label'=>'Delete Societes', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->SOCIETE_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Societes', 'url'=>array('admin')),
);
?>

<h1>View Societes #<?php echo $model->SOCIETE_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'SOCIETE_ID',
		'NOM',
		'DESCRIPTION',
	),
)); ?>
