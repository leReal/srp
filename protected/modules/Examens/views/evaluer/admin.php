<?php
/* @var $this EvaluerController */
/* @var $model Evaluer */

$this->breadcrumbs=array(
        //'Accueil module'=>array(' '),
	'Gestion des notes'=>array('index'),
	'Manipuler des notes',
);

$this->menu=array(
	array('label'=>'Liste des notes', 'url'=>array('index')),
	array('label'=>'Attribuer des notes', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('evaluer-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manipuler les notes</h1>

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
	'id'=>'evaluer-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
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
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
