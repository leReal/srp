<?php
/* @var $this EnseignantsController */
/* @var $model Enseignants */

$this->breadcrumbs=array(
	'Enseignants'=>array('index'),
	$model->NOM,
);

$this->menu=array(
	array('label'=>'Liste des Enseignants', 'url'=>array('index')),
	array('label'=>'Créer Enseignants', 'url'=>array('create')),
	array('label'=>'Modifier l\'enseignants', 'url'=>array('update', 'id'=>$model->ESEIGNANT_ID)),
	array('label'=>'Supprimer l\' enseignants', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->ESEIGNANT_ID),'confirm'=>'Voulez vous vraiment supprimer cet enseignant?')),
	array('label'=>'Gérer l\'enseignants', 'url'=>array('admin')),
);
?>

<h1>Détail de l' enseignant :<?php echo $model->NOM; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ESEIGNANT_ID',
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
		/*'LOGIN',
		'PASSWORD',*/
		'TELEPHONE',
	),
)); ?>
