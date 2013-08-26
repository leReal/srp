<?php
/* @var $this EtablissementsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Etablissements',
);

$this->menu=array(
	array('label'=>'Créer un établissements', 'url'=>array('create')),
	array('label'=>'Gérer les établissements', 'url'=>array('admin')),
);
?>

<h1>Etablissements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
