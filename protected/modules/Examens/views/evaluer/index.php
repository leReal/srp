<?php
/* @var $this EvaluerController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gestion des notes',
);

$this->menu=array(
	array('label'=>'Attribuer les notes', 'url'=>array('create')),
	array('label'=>'Gérer les notes', 'url'=>array('admin')),
);
?>

<h1>Gestion des notes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
