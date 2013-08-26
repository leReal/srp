<?php
/* @var $this CoursController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Cours',
);

$this->menu=array(
	array('label'=>'Créer un cours', 'url'=>array('create')),
	array('label'=>'Gérer les cours', 'url'=>array('admin')),
);
?>

<h1>Cours</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
