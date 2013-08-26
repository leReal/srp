<?php
/* @var $this AnneeacademiquesController */
/* @var $model Anneeacademiques */

$this->breadcrumbs=array(
	'Administration'=>array('/site/administration'),
        'Années académiques'=>array('index'),
	'Créer',
);

$this->menu=array(
	array('label'=>'Liste des  années académiques', 'url'=>array('index')),
	array('label'=>'Gérer années académiques', 'url'=>array('admin')),
);
?>

<h1>Create Anneeacademiques</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>