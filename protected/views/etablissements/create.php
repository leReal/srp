<?php
/* @var $this EtablissementsController */
/* @var $model Etablissements */

$this->breadcrumbs=array(
	'Etablissements'=>array('index'),
	'Créer',
);

$this->menu=array(
	array('label'=>'Liste des établissements', 'url'=>array('index')),
	array('label'=>'Gére les établissements', 'url'=>array('admin')),
);
?>

<h1>Créer un établissement</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>