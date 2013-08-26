<?php
/* @var $this StatutsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Statuts',
);

$this->menu=array(
	array('label'=>'Create Statuts', 'url'=>array('create')),
	array('label'=>'Manage Statuts', 'url'=>array('admin')),
);
?>

<h1>Statuts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
