<?php
/* @var $this ExamensController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Gestion des examens',
);

$this->menu=array(
	array('label'=>'Créer un examen', 'url'=>array('create')),
	array('label'=>'Gestion des examens', 'url'=>array('admin')),
);
?>

<h1>Gestion des examens</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
