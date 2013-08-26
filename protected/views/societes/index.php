<?php
/* @var $this SocietesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Societes',
);

$this->menu=array(
	array('label'=>'Create Societes', 'url'=>array('create')),
	array('label'=>'Manage Societes', 'url'=>array('admin')),
);
?>

<h1>Societes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
