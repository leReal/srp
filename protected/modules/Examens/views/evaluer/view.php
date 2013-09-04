<?php
/* @var $this EvaluerController */
/* @var $model Evaluer */

$this->breadcrumbs=array(
	'Evaluers'=>array('index'),
	$model->EVAL_ID,
);

$this->menu=array(
	array('label'=>'Liste des notes', 'url'=>array('index')),
	array('label'=>'Attribuer des notes', 'url'=>array('create')),
	array('label'=>'Modifier une note', 'url'=>array('update', 'id'=>$model->EVAL_ID)),
	array('label'=>'Supprimer une note', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->EVAL_ID),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Gérer des notes', 'url'=>array('admin')),
);
?>

<h1>Consulter une note #<?php echo $model->EVAL_ID; ?></h1>

<?php
        $eleve = Eleves::model()->findByPk($model->ELEVE_ID);
            if($eleve instanceof  Eleves)
                $lib = $eleve->getAttribute('NOM').' '.$eleve->getAttribute('PRENOM');
            else
                $lib = $model->ELEVE_ID;
            $model->setAttribute('ELEVE_ID', $lib);

             $var = Anneeacademiques::model()->findByPk($model->ANNEEACADEMIQUE_ID);
            if($var instanceof  Anneeacademiques)
                $lib = $var->getAttribute('NOM');
            else
                $lib = $model->ANNEEACADEMIQUE_ID;
            $model->setAttribute('ANNEEACADEMIQUE_ID', $lib);

            $var = Cours::model()->findByPk($model->COURS_ID);
            if($var instanceof  Cours)
                $lib = $var->getAttribute('NOM');
            else
                $lib = $model->COURS_ID;
            $model->setAttribute('COURS_ID', $lib);

            $var = Examens::model()->findByPk($model->EXAMEN_ID);
            if($var instanceof  Examens)
                $lib = $var->getAttribute('NOM');
            else
                $lib = $model->EXAMEN_ID;
            $model->setAttribute('EXAMEN_ID', $lib);

            $var = Classes::model()->findByPk($model->CLASSE_ID);
            if($var instanceof  Classes)
                $lib = $var->getAttribute('NOM');
            else
                $lib = $model->CLASSE_ID;
            $model->setAttribute('CLASSE_ID', $lib);

            $var = Etablissements::model()->findByPk($model->ETABLISSEMENT_ID);
            if($var instanceof  Etablissements)
                $lib = $var->getAttribute('NOM');
            else
                $lib = $model->ETABLISSEMENT_ID;
            $model->setAttribute('ETABLISSEMENT_ID', $lib);

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'ELEVE_ID',
		//'ANNEEACADEMIQUE_ID',
		'COURS_ID',
		'EXAMEN_ID',
		//'ETABLISSEMENT_ID',
		'DATE',
		'MOYENE',
		'CLASSE_ID',
		'OBSERV',
		'EVAL_ID',
	),
)); ?>
