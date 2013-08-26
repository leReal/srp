<?php
/* @var $this EnseignantsController */
/* @var $model Enseignants */

$this->breadcrumbs=array(
	'Enseignants'=>array('index'),
	'Gérer',
);

$this->menu=array(
	array('label'=>'Liste des enseignants', 'url'=>array('index')),
	array('label'=>'Créer un enseignant', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#enseignants-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gérer les enseignants</h1>

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
	'id'=>'enseignants-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ESEIGNANT_ID',
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
		/*'LOGIN',
		'PASSWORD',*/
		'TELEPHONE',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
