<?php
/* @var $this EvaluerController */
/* @var $model Evaluer */

$this->breadcrumbs=array(
	'Gestion des notes'=>array('index'),
	'Edition des rapports',
);

?>

<h1>Generation des bulletins</h1>

<?php echo $this->renderPartial('_form_bulletin', array('model'=>$model)); ?>