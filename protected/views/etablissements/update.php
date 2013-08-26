<?php
/* @var $this EtablissementsController */
/* @var $model Etablissements */

$this->breadcrumbs=array(
	'Etablissements'=>array('index'),
	$model->ETABLISSEMENT_ID=>array('view','id'=>$model->ETABLISSEMENT_ID),
	'Modifier',
);

$this->menu=array(
	array('label'=>'Liste des établissements', 'url'=>array('index')),
	array('label'=>'Créer un établissements', 'url'=>array('create')),
	array('label'=>'Consulter l\'établissement', 'url'=>array('view', 'id'=>$model->ETABLISSEMENT_ID)),
	array('label'=>'Gérer les établissements', 'url'=>array('admin')),
);
?>

<h1>Modifier l'établissements <?php echo $model->NOM; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>