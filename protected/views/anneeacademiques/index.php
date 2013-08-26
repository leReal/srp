<?php
/* @var $this AnneeacademiquesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
    'Administration'=>array('/site/administration'),
    'Années Académiques',
);

$this->menu=array(
	array('label'=>'Créer une année académique', 'url'=>array('create')),
	array('label'=>'Gérer les années académiques', 'url'=>array('admin')),
);
?>

<h1>Anneeacademiques</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
