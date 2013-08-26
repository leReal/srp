<?php
/* @var $this InscriptionController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Inscriptions',
);

$this->menu=array(
	array('label'=>'Créer une inscription', 'url'=>array('create')),
	array('label'=>'Gérer les inscriptions', 'url'=>array('admin')),
);
?>

<h1>Liste des inscriptions</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
