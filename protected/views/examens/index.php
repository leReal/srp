<?php
/* @var $this ExamensController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Examens',
);

$this->menu=array(
	array('label'=>'Create Examens', 'url'=>array('create')),
	array('label'=>'Manage Examens', 'url'=>array('admin')),
);
?>

<h1>Examens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
