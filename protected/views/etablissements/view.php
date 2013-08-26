<?php
/* @var $this EtablissementsController */
/* @var $model Etablissements */

$this->breadcrumbs=array(
	'Etablissements'=>array('index'),
	$model->NOM,
);

$this->menu=array(
	array('label'=>'Liste des établissements', 'url'=>array('index')),
	array('label'=>'Créer un établissement', 'url'=>array('create')),
	array('label'=>'Modifier l\' établissement', 'url'=>array('update', 'id'=>$model->ETABLISSEMENT_ID)),
	array('label'=>'Supprimer l\' établissement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ETABLISSEMENT_ID),'confirm'=>'Voulez vous vraiment supprimer cet établissement?')),
	array('label'=>'Gérer l\' établissements', 'url'=>array('admin')),
);
?>

<h1>Détails de l'établissements :<?php echo $model->NOM; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ETABLISSEMENT_ID',),));?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->sOCIETE,
	'attributes'=>array(
		'NOM:text:Société',
            ),
    ));
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'attributes'=>array(
		'NOM',
		'DESCRIPTION',
	),
)); ?>
