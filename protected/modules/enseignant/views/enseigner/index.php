<?php
/* @var $this EnseignerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enseigners',
);

$this->menu=array(
	array('label'=>'Create Enseigner', 'url'=>array('create')),
	array('label'=>'Manage Enseigner', 'url'=>array('admin')),
);
?>

<h1>Enseigners</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
