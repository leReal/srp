<?php
/* @var $this TypepaiementsController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Typepaiements',
);

$this->menu=array(
	array('label'=>'Create Typepaiements', 'url'=>array('create')),
	array('label'=>'Manage Typepaiements', 'url'=>array('admin')),
);
?>

<h1>Typepaiements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
