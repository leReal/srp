<?php
/* @var $this CoursController */
/* @var $model Cours */

$this->breadcrumbs=array(
	'Cours'=>array('index'),
	$model->NOM,
);

$this->menu=array(
	array('label'=>'Liste des cours', 'url'=>array('index')),
	array('label'=>'Créer un cours', 'url'=>array('create')),
	array('label'=>'Modifier le cours', 'url'=>array('update', 'id'=>$model->COURS_ID)),
	array('label'=>'Supprimer le cours', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->COURS_ID),'confirm'=>'Voulez vous vraiment supprimer ce cours?')),
	array('label'=>'Gérer les cours', 'url'=>array('admin')),
);
?>

<h1>Détails du cours :<?php echo $model->NOM; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'COURS_ID',),));?>
<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model->eTABLISSEMENT,
	'attributes'=>array(
		'NOM',
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
