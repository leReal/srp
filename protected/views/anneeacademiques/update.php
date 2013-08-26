<?php
/* @var $this AnneeacademiquesController */
/* @var $model Anneeacademiques */

$this->breadcrumbs=array(
	'Administration'=>array('/site/administration'),
        'Années académiques'=>array('index'),
	$model->ANNEEACADEMIQUE_ID=>array('view','id'=>$model->ANNEEACADEMIQUE_ID),
	'Modifier',
);

$this->menu=array(
	array('label'=>'Liste des années académiques', 'url'=>array('index')),
	array('label'=>'Créer une année académique', 'url'=>array('create')),
	array('label'=>'Consulter l\' année académique', 'url'=>array('view', 'id'=>$model->ANNEEACADEMIQUE_ID)),
	array('label'=>'Gérer les années académiques', 'url'=>array('admin')),
);
?>

<h1>Modifier l' année academique <?php echo $model->DATEDEB;echo '/';echo $model->DATEFIN; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>