<?php
/* @var $this ExamensController */
/* @var $model Examens */

$this->breadcrumbs=array(
	'Examens'=>array('index'),
	$model->EXAMEN_ID=>array('view','id'=>$model->EXAMEN_ID),
	'Update',
);

$this->menu=array(
	array('label'=>'List Examens', 'url'=>array('index')),
	array('label'=>'Create Examens', 'url'=>array('create')),
	array('label'=>'View Examens', 'url'=>array('view', 'id'=>$model->EXAMEN_ID)),
	array('label'=>'Manage Examens', 'url'=>array('admin')),
);
?>

<h1>Update Examens <?php echo $model->EXAMEN_ID; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>