<?php
/* @var $this AccesoiresController */
/* @var $model Accesoires */

$this->breadcrumbs=array(
        'Administration'=>array('/site/administration'),
	'Accesoires'=>array('index'),
	'Créer',
);

$this->menu=array(
	array('label'=>'Liste des accesoires', 'url'=>array('index')),
	array('label'=>'Gérer un accesoires', 'url'=>array('admin')),
);
?>

<h1>Créer les accesoires</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>