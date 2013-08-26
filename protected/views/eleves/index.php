<?php
/* @var $this ElevesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Elèves',
);

$this->menu=array(
	array('label'=>'Creér un élève', 'url'=>array('create')),
	array('label'=>'Gérer les élèves', 'url'=>array('admin')),
);
?>

<h1>Elèves</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
