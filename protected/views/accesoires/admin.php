<?php
/* @var $this AccesoiresController */
/* @var $model Accesoires */

$this->breadcrumbs=array(
	'Administration'=>array('/site/administration'),
        'Accesoires'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'Liste des accesoires', 'url'=>array('index')),
	array('label'=>'Créer un accesoires', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#accesoires-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gérer les accesoires</h1>
<?php /*
<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>*/
?>
<?php echo CHtml::link('Recherche avancée','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'accesoires-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ACCESOIRE_ID',
		array(  
                 'name'=>'ETABLISSEMENT_ID',
                 'value'=>'$data->eTABLISSEMENT->NOM',
                 ),
		'NOM',
		'DESCRIPTION',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
