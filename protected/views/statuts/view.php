<?php
/* @var $this StatutsController */
/* @var $model Statuts */

$this->breadcrumbs=array(
	'Statuts'=>array('index'),
	$model->STATUT_ID,
);

$this->menu=array(
	array('label'=>'List Statuts', 'url'=>array('index')),
	array('label'=>'Create Statuts', 'url'=>array('create')),
	array('label'=>'Update Statuts', 'url'=>array('update', 'id'=>$model->STATUT_ID)),
	array('label'=>'Delete Statuts', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->STATUT_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Statuts', 'url'=>array('admin')),
);
?>

<h1>View Statuts #<?php echo $model->STATUT_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'STATUT_ID',
		'NOM',
		'DESCRIPTION',
		'TYPE',
	),
)); ?>
