<?php
/* @var $this ElevesController */
/* @var $model Eleves */

$this->breadcrumbs=array(
	'Eleves'=>array('index'),
	'Gérer',
);

$this->menu=array(
	array('label'=>'Liste des élèves', 'url'=>array('index')),
	array('label'=>'Créer un élèves', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#eleves-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gérer les élèves </h1>

<!--<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> -->

<?php echo CHtml::link('Recherche avancée','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'eleves-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ELEVE_ID',
		 array(  
                 'name'=>'ETABLISSEMENT_ID',
                 'value'=>'$data->eTABLISSEMENT->NOM',
                 ),
		array(  
                 'name'=>'STATUT_ID',
                 'value'=>'$data->sTATUT->NOM',
                 ),
		'NOM',
		'PRENOM',
		'DATE_NAISSANCE',
                'SEXE',
		'NOM_PRENOM_PERE',
		'NOM__PRENOM_MERE',
		'ADRESSE',	
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
