<?php
/* @var $this ExamensController */
/* @var $model Examens */

$this->breadcrumbs=array(
	'Examens'=>array('index'),
	$model->EXAMEN_ID,
);

$this->menu=array(
	array('label'=>'Liste des examens', 'url'=>array('index')),
	array('label'=>'Créer un examen', 'url'=>array('create')),
	array('label'=>'Modifier un examen', 'url'=>array('update', 'id'=>$model->EXAMEN_ID)),
	array('label'=>'Supprimer un examen', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EXAMEN_ID),'confirm'=>'Voulez vous vraiment supprimer cet examen?')),
	array('label'=>'Gestion des examens', 'url'=>array('admin')),
);
?>

<h1>Consulter un examens #<?php echo $model->EXAMEN_ID; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'EXAMEN_ID',
		'ETABLISSEMENT_ID',
                'CLASSE_ID',
                'COURS_ID',
		'NOM',
                'DATE_DEB',
		'DESCRIPTION',
                
	),
)); ?>
