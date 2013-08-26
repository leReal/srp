<?php
/* @var $this AnneeacademiquesController */
/* @var $model Anneeacademiques */

$this->breadcrumbs=array(
	'Administration'=>array('/site/administration'),
        'Années académiques'=>array('index'),
	$model->DATEDEB +'/'+$model->DATEFIN,
);

$this->menu=array(
	array('label'=>'Liste des années académiques', 'url'=>array('index')),
	array('label'=>'Créer une année académique', 'url'=>array('create')),
	array('label'=>'Modifier une année académique', 'url'=>array('update', 'id'=>$model->ANNEEACADEMIQUE_ID)),
	array('label'=>'Supprimer l\'année académique', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ANNEEACADEMIQUE_ID),'confirm'=>'voulez vous vraiment supprimer l\'année académique')),
	array('label'=>'Gérer les années académiques', 'url'=>array('admin')),
);
?>

<h1> Détails Année académiques  <?php echo $model->DATEDEB;echo '/';echo $model->DATEFIN;?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ANNEEACADEMIQUE_ID'
		,),));?>
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
		'DATEDEB',
		'DATEFIN',
	),
)); ?>
