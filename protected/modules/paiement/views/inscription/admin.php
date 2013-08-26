<?php
/* @var $this InscriptionController */
/* @var $model Inscription */

$this->breadcrumbs=array(
	'Inscriptions'=>array('index'),
	'Gérer',
);

$this->menu=array(
	array('label'=>'Consulter les inscriptions', 'url'=>array('index')),
	array('label'=>'Créer une inscription', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#inscription-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestion des inscriptions</h1>

<?php echo CHtml::link('Recherche avancée','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->
<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'inscription-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                array(  
                 'name'=>'ANNEEACADEMIQUE_ID',
                 'value'=>'(string)$data->aNNEEACADEMIQUE->DATEDEB."/".(string)$data->aNNEEACADEMIQUE->DATEFIN',
                 ),
                array(  
                 'name'=>'ELEVE_ID',
                 'value'=>'$data->eLEVE->NOM." ".$data->eLEVE->PRENOM',
                 ),
                 array(  
                 'name'=>'CLASSE_ID',
                 'value'=>'$data->cLASSE->NOM',
                 ),
                 array(  
                 'name'=>'ETABLISSEMENT_ID',
                 'value'=>'$data->eTABLISSEMENT->NOM',
                 ),
		'DATE',
		'NUMERO',
		/*
		'inscription_id',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
