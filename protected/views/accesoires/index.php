<?php
/* @var $this AccesoiresController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
        'Administration'=>array('/site/administration'),
	'Accesoires',
);

$this->menu=array(
	array('label'=>'Créer Accesoires', 'url'=>array('create')),
	array('label'=>'Gérer Accesoires', 'url'=>array('admin')),
);
?>

<h1>Accesoires</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
