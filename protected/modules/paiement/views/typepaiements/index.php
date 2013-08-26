<?php
/* @var $this TypepaiementsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Types de paiement',
);

$this->menu=array(
	array('label'=>'Créer un type de paiement', 'url'=>array('create')),
	array('label'=>'Gérer les types de paiement', 'url'=>array('admin')),
);
?>

<h1>Liste des types de paiement</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
