<?php
/* @var $this PayementController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Paiements',
);

$this->menu=array(
	array('label'=>'Créer un paiement', 'url'=>array('create')),
	array('label'=>'Gérer les paiements', 'url'=>array('admin')),
);
?>

<h1>Liste des paiements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
