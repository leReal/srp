<?php
/* @var $this EvaluerController */
/* @var $model Evaluer */

$this->breadcrumbs=array(
        //'Accueil module'=>array(' '),
	'Gestion des notes'=>array('index'),
            'Gérer les notes',
);

$this->menu=array(
	array('label'=>'Liste des notes', 'url'=>array('index')),
	array('label'=>'Attribuer les notes', 'url'=>array('create')),
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
