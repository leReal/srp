<?php
/* @var $this EvaluerController */
/* @var $model Evaluer */

$this->breadcrumbs=array(
	'Evaluers'=>array('index'),
	'Attribuer lesss notes',
);

$this->menu=array(
	array('label'=>'Liste des notes', 'url'=>array('index')),
	array('label'=>'Gestion des notes', 'url'=>array('admin')),
);
?>

<h1>Attribuer les notes</h1>

<?php 
//echo $this->renderPartial('_form', array('model'=>$model));
?>

<?php
/* @var $this EvaluerController */
/* @var $model Evaluer */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'evaluer-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Les champs avec la marque <span class="required">*</span> sont oligatoires.</p>

	<?php echo $form->errorSummary($model); ?>


<div id="les_eleves" class="view">
<?php
    echo 'Nombre d\'éléments trouvés : '.count($this->listeEltsAEnregistrer);

    $modelInscrp=new Inscription();

    if(count($this->listeEltsAEnregistrer) == 1){
        $model = $this->listeEltsAEnregistrer[0];

        echo $form->labelEx($modelInscrp,'ELEVE_ID');
        echo CHtml::encode($model->getAttribute('ELEVE_ID'));
        echo '<br />';

        echo $form->labelEx($model,'MOYENE');
        echo $form->textField($model,'MOYENE');
        echo $form->error($model,'NOM');

        echo '<br />';

    }else{
        echo '<div class="view">Plus d\'un élément trouvé !</div>';
    }



?>
    </div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Enregistrer' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->