<?php
/* @var $this AnneeacademiquesController */
/* @var $model Anneeacademiques */

$this->breadcrumbs=array(
	'Administration'=>array('/site/administration'),
        'Années Académiques'=>array('index'),
	'Gérer',
);

$this->menu=array(
	array('label'=>'Listes des  Année académiques', 'url'=>array('index')),
	array('label'=>'Créer une Année académique', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#anneeacademiques-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gérer les  années académiques</h1>



<?php echo CHtml::link('Recherche avancée','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'anneeacademiques-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ANNEEACADEMIQUE_ID',
		array(  
                 'name'=>'ETABLISSEMENT_ID',
                 'value'=>'$data->eTABLISSEMENT->NOM',
                 ),
		'DATEDEB',
		'DATEFIN',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
