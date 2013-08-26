<?php
/* @var $this CoursController */
/* @var $model Cours */

$this->breadcrumbs=array(
	'Cours'=>array('index'),
	'Gérer',
);

$this->menu=array(
	array('label'=>'Liste des cours', 'url'=>array('index')),
	array('label'=>'Créer cours', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#cours-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gérer les cours</h1>

<?php /*<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p> */?>

<?php echo CHtml::link('Recherche avancée','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'cours-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'COURS_ID',
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
