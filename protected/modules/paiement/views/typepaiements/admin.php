<?php
/* @var $this TypepaiementsController */
/* @var $model Typepaiements */

$this->breadcrumbs=array(
	'Types de paiement'=>array('index'),
	'Gérer',
);

$this->menu=array(
	array('label'=>'Consulter les types de paiement', 'url'=>array('index')),
	array('label'=>'Créer un type de paiement', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
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

<h1>Gestion des types de paiement</h1>

<?php echo CHtml::link('Recherche avancée','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:block">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $grid=array(
		'TYPE_PAIEMENT_ID',
                array(  
                 'name'=>'ETABLISSEMENT_ID',
                 'value'=>'$data->eTABLISSEMENT->NOM',
                 ),
		'NOM',
		'TPYE',
		array(
			'class'=>'CButtonColumn',
		),
	);
?>


<?php $this->widget('application.components.widgets.tlbExcelView', array(
    'id'                   => 'some-grid',
    'dataProvider'         => $model->search(),
    'grid_mode'            => $production, // Same usage as EExcelView v0.33
    //'template'           => "{summary}\n{items}\n{exportbuttons}\n{pager}",
    'title'                => 'Liste des types de paiements - ' . date('d-m-Y - H-i-s'),
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
    'rowHeight'            => 45, // Default: 15
    'headerBorderColor'    => 'FF0000', // Default: '000000'
    'headerBgColor'        => 'CCCCCC', // Default: 'CCCCCC'
    'headerTextColor'      => '0000FF', // Default: '000000'
    'headerHeight'         => 10, // Default: 20
    'footerHeight'         => 50, // Default: 20
    'zoomScale'            => 75, // Default: 100
    'columns'              => $grid // an array of your CGridColumns  
)); ?>
