<?php
/* @var $this ExamensController */
/* @var $model Examens */

$this->breadcrumbs=array(
	'Examens'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Examens', 'url'=>array('index')),
	array('label'=>'Manage Examens', 'url'=>array('admin')),
);
?>

<h1>Create Examens</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>