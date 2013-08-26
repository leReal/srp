<?php
/* @var $this ElevesController */
/* @var $model Eleves */

$this->breadcrumbs=array(
	'Eleves'=>array('index'),
	$model->NOM,
);

$this->menu=array(
	array('label'=>'Liste des élèves', 'url'=>array('index')),
	array('label'=>'Créer un élève', 'url'=>array('create')),
	array('label'=>'Modifier l\' élèves', 'url'=>array('update', 'id'=>$model->ELEVE_ID)),
	array('label'=>'Supprimer l\' élèves', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ELEVE_ID),'confirm'=>'Voulez vous vraiment supprimer cet élève ?')),
	array('label'=>'Gérer les élèves', 'url'=>array('admin')),
);
?>

<h1>Détails de l'élève :<?php echo $model->NOM; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ELEVE_ID',
            ),));
    ?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->eTABLISSEMENT,
	'attributes'=>array(
		'NOM',
            ),
    ));
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->sTATUT,
	'attributes'=>array(
		'NOM',
            ),
    ));
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NOM',
		'PRENOM',
		'DATE_NAISSANCE',
                'SEXE',
		'DATE_ENREGISTREMENT',
		'NOM_PRENOM_PERE',
		'NOM__PRENOM_MERE',
		'ADRESSE',
		'TELEPHONE_PERE',
		'TELEPHONE_MERE',
	),
)); ?>
