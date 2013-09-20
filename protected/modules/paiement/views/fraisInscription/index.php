<?php
/* @var $this FraisInscriptionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Frais Inscriptions',
);

$this->menu=array(
	array('label'=>"Créer un frais d'inscription", 'url'=>array('create')),
	array('label'=>"Gérer les frais d'inscription", 'url'=>array('admin')),
);
?>

<h1>Frais d'inscription</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
