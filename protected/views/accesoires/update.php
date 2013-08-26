<?php
/* @var $this AccesoiresController */
/* @var $model Accesoires */

$this->breadcrumbs=array(
	'Administration'=>array('/site/administration'),
        'Accesoires'=>array('index'),
	$model->NOM=>array('view','id'=>$model->ACCESOIRE_ID),
	'Modifier',
);

$this->menu=array(
	array('label'=>'Liste des accesoires', 'url'=>array('index')),
	array('label'=>'Créer un accesoire', 'url'=>array('create')),
	array('label'=>'Consulter l\' accesoire', 'url'=>array('view', 'id'=>$model->ACCESOIRE_ID)),
	array('label'=>'Gérer les accesoires', 'url'=>array('admin')),
);
?>

<h1>Modifier l'accesoire <?php echo $model->NOM; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>