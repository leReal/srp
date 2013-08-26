<?php
/* @var $this EnseignantsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Enseignants',
);

$this->menu=array(
	array('label'=>'Créer un enseignant', 'url'=>array('create')),
	array('label'=>'Gérer les enseignants', 'url'=>array('admin')),
);
?>

<h1>Enseignants</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
