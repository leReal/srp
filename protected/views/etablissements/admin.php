<?php
/* @var $this EtablissementsController */
/* @var $model Etablissements */

$this->breadcrumbs=array(
	'Administration'=>array('/site/administration'),
        'Etablissements'=>array('index'),
	'Gérer',
);

$this->menu=array(
	array('label'=>'Liste des établissements', 'url'=>array('index')),
	array('label'=>'Créer un établissement', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#etablissements-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gérer les établissements</h1>



<?php echo CHtml::link('Recherche avancée','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'etablissements-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'ETABLISSEMENT_ID',
		array(  
                 'name'=>'SOCIETE_ID',
                 'value'=>'$data->sOCIETE->NOM',
                 ),
		'NOM',
		'DESCRIPTION',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
