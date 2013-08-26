<?php
/* @var $this AccesoiresController */
/* @var $model Accesoires */

$this->breadcrumbs=array(
        'Administration'=>array('/site/administration'),
        'Accesoires'=>array('index'),
	$model->NOM,
);

$this->menu=array(
	array('label'=>'Liste des accesoires', 'url'=>array('index')),
	array('label'=>'Créer un accesoire', 'url'=>array('create')),
	array('label'=>'Modifier l\'accesoire', 'url'=>array('update', 'id'=>$model->ACCESOIRE_ID)),
	array('label'=>'Supprimer l\'accesoire', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ACCESOIRE_ID),'confirm'=>'Voulez vous vraiment supprimer cet accessire?')),
	array('label'=>'Gérer les accesoires', 'url'=>array('admin')),
);
?>

<h1>Détails de l'accesoire :<?php echo $model->NOM;?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ACCESOIRE_ID',),));?>
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
		'DESCRIPTION',
	),
)); ?>
