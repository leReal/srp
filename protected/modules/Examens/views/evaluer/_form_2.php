<?php
/* @var $this EvaluerController */
/* @var $model Evaluer */
/* @var $form CActiveForm */
?>

<?php
Yii::app()->bootstrap->register();
$this->beginWidget('bootstrap.widgets.TbHeroUnit', array(
    'heading'=>'Edition des rapports',
)); ?>

    <p>Clickez sur un rapport à générer.</p>
    <p><?php $this->widget('bootstrap.widgets.TbButton', array(
        'type'=>'primary',
        'size'=>'large',
        'label'=>'Bulletin',
        'url'=>'ConfBulletin'
    )); ?></p>

<?php $this->endWidget(); ?>

    