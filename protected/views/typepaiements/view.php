<?php
/* @var $this TypepaiementsController */
/* @var $model Typepaiements */

$this->breadcrumbs=array(
	'Typepaiements'=>array('index'),
	$model->TYPE_PAIEMENT_ID,
);

$this->menu=array(
	array('label'=>'List Typepaiements', 'url'=>array('index')),
	array('label'=>'Create Typepaiements', 'url'=>array('create')),
	array('label'=>'Update Typepaiements', 'url'=>array('update', 'id'=>$model->TYPE_PAIEMENT_ID)),
	array('label'=>'Delete Typepaiements', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->TYPE_PAIEMENT_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Typepaiements', 'url'=>array('admin')),
);
?>

<h1>View Typepaiements #<?php echo $model->TYPE_PAIEMENT_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'TYPE_PAIEMENT_ID',
		'ETABLISSEMENT_ID',
		'NOM',
		'TPYE',
	),
)); ?>
