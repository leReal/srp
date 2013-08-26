<?php
/* @var $this ExamensController */
/* @var $model Examens */

$this->breadcrumbs=array(
	'Examens'=>array('index'),
	'Gestion des examens',
);

$this->menu=array(
	array('label'=>'Liste des examens', 'url'=>array('index')),
	array('label'=>'Créer un examen', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('examens-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestion des examens</h1>

<p>
    Vous pouvez éventuelement préciser les opérateurs de comparaisons (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) au début de chacune des valeurs recherchées, pour préciser comment la comparaison doit être faite.

</p>

<?php echo CHtml::link('Recherche avancée','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'examens-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'EXAMEN_ID',
		'ETABLISSEMENT_ID',
		'NOM',
		'DESCRIPTION',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
