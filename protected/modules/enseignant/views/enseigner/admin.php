<?php
/* @var $this EnseignerController */
/* @var $model Enseigner */

$this->breadcrumbs=array(
	'Enseigners'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Enseigner', 'url'=>array('index')),
	array('label'=>'Create Enseigner', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#enseigner-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Enseigners</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'enseigner-grid',
	'dataProvider'=>$model->sqlSearch(),
	'filter'=>$model,
	'columns'=>array(
		array(
			'header'=>'Id',
			'name'=>'enseigner_id',
		),
		array(
			'header'=>'DEBUT ANNEE ACADEMIQUE',
			'name'=>'var_DATEDEB',
		),
		array(
			'header'=>'FIN ANNEE ACADEMIQUE',
			'name'=>'var_DATEFIN',
		),
		array(
			'header'=>'ETABLISSEMENT',
			'name'=>'var_ETABLISSEMENT',
		),
		array(
			'header'=>'CLASSE',
			'name'=>'var_CLASSE',
		),
		array(
			'header'=>'COURS',
			'name'=>'var_COURS',
		),
		array(
			'header'=>'NOM ENSEIGNANT',
			'name'=>'var_NOMENSEIGNANT',
		),
		array(
			'header'=>'PRENOM ENSEIGNANT',
			'name'=>'var_PRENOMENSEIGNANT',
		),
		array(
			'header'=>'ROLE',
			'name'=>'ROLE',
		),
	/*	array(
			'class'=>'CButtonColumn',
			'deleteConfirmation'=>'Êtes-vous sur de vouloir supprimer cet élément?',
			'afterDelete'=>'function(link,success,data){if(success) alert("Suppression reussie !");}',
		), */
	),
)); ?>

<p>
<?php
	  $this->widget('zii.widgets.jui.CJuiButton',array(
	      'name'=>'export',
	      'caption'=>'Exporter',
	      'value'=>'export',
		  'buttonType'=>'link',
		  'url'=>Yii::app()->request->baseUrl."/report/reportEnseigner.php",
	  ));
 ?>
</p>

