<?php
/* @var $this PayementController */
/* @var $model Payement */

$this->breadcrumbs=array(
	'Paiements'=>array('index'),
	'Gérer',
);

$this->menu=array(
	array('label'=>'Créer un paiement', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#payement-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Gestion des paiements</h1>

<?php echo CHtml::link('Recherche avancée','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'payement-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
                'payement_id',
		array(  
                 'name'=>'ANNEEACADEMIQUE_ID',
                 'value'=>'(string)$data->aNNEEACADEMIQUE->DATEDEB."/".(string)$data->aNNEEACADEMIQUE->DATEFIN',
                 ),
		array(  
                 'name'=>'ELEVE_ID',
                 'value'=>'$data->eLEVE->NOM." ".$data->eLEVE->PRENOM',
                 ),
                array(  
                 'name'=>'TYPE_PAIEMENT_ID',
                 'value'=>'$data->tYPEPAIEMENT->NOM',
                 ),
		array(  
                 'name'=>'ETABLISSEMENT_ID',
                 'value'=>'$data->eTABLISSEMENT->NOM',
                 ),
		'DATE',
		'MONTANT',		
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
