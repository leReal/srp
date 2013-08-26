<?php
/* @var $this ExamensController */
/* @var $model Examens */

$this->breadcrumbs=array(
	'Examens'=>array('index'),
	$model->EXAMEN_ID,
);

$this->menu=array(
	array('label'=>'List Examens', 'url'=>array('index')),
	array('label'=>'Create Examens', 'url'=>array('create')),
	array('label'=>'Update Examens', 'url'=>array('update', 'id'=>$model->EXAMEN_ID)),
	array('label'=>'Delete Examens', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EXAMEN_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Examens', 'url'=>array('admin')),
);
?>

<h1>View Examens #<?php echo $model->EXAMEN_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'EXAMEN_ID',
		'ETABLISSEMENT_ID',
		'NOM',
		'DESCRIPTION',
	),
)); ?>
