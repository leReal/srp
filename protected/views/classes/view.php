<?php
/* @var $this ClassesController */
/* @var $model Classes */

$this->breadcrumbs=array(
	'Classes'=>array('index'),
	$model->NOM,
);

$this->menu=array(
	array('label'=>'Liste des classe', 'url'=>array('index')),
	array('label'=>'Créer une classe', 'url'=>array('create')),
	array('label'=>'Modifier la classe', 'url'=>array('update', 'id'=>$model->CLASSE_ID)),
	array('label'=>'Supprimer la classe', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->CLASSE_ID),'confirm'=>'Voulez vous vraiment supprimer cette classe ?')),
	array('label'=>'Gérer les classes', 'url'=>array('admin')),
);
?>

<h1>Détails de la classe : <?php echo $model->NOM; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'CLASSE_ID',),));?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->eTABLISSEMENT,
	'attributes'=>array(
		'NOM:text:Etablissement',
            ),
    ));
?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
        'attributes'=>array(
		'NOM',
		'NIVEAU',
		'FRAIS_SCOLARITE',
	//	'MOYENE',
	),
)); ?>
