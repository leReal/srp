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

Yii::app()->clientScript->registerScript('search', "$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('#exportToExcel').click(function(){
window.location = '". $this->createUrl('admin') . "?' + $(this).parents('form').serialize() + '&export=true';
return false;
});
 
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('some-grid', {
data: $(this).serialize()
});
 
return false;
});
"); ?>

<h1>Gestion des paiements</h1>

<?php echo CHtml::link('Recherche avancée','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $grid=array(
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
                 'name'=>'CLASSE_ID',
                 'value'=>'$data->cLASSE->NOM',
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
	); ?>

<?php $this->widget('application.components.widgets.tlbExcelView', array(
    'id'                   => 'some-grid',
    'dataProvider'         => $model->search(),
    'grid_mode'            => $production, // Same usage as EExcelView v0.33
    //'template'           => "{summary}\n{items}\n{exportbuttons}\n{pager}",
    'title'                => 'Some title - ' . date('d-m-Y - H-i-s'),
    'creator'              => 'Your Name',
    'lastModifiedBy'       => 'Some Name',
    'sheetTitle'           => 'Report on ' . date('m-d-Y H-i'),
    'keywords'             => '',
    'category'             => '',
    'landscapeDisplay'     => true, // Default: false
    'A4'                   => true, // Default: false - ie : Letter (PHPExcel default)
    'pageFooterText'       => '&RThis is page no. &P of &N pages', // Default: '&RPage &P of &N'
    'automaticSum'         => true, // Default: false
    'decimalSeparator'     => ',', // Default: '.'
    'thousandsSeparator'   => '.', // Default: ','
    //'displayZeros'       => false,
    //'zeroPlaceholder'    => '-',
    'sumLabel'             => 'Column totals:', // Default: 'Totals'
    'borderColor'          => '00FF00', // Default: '000000'
    'bgColor'              => 'FFFF00', // Default: 'FFFFFF'
    'textColor'            => 'FF0000', // Default: '000000'
    'rowHeight'            => 45, // Default: 15
    'headerHeight'         => 10, // Default: 20
    'footerHeight'         => 50, // Default: 20
    'zoomScale'            => 75, // Default: 100
    'columns'              => $grid // an array of your CGridColumns  
)); ?>

<?php echo CHtml::button('Exporter vers Excel (xls)', array('id' => 'exportToExcel')); ?>
