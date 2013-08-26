<?php
/* @var $this DefaultController */

$this->breadcrumbs=array(
	"Evaluation",
);
?>
<style type="text/css">
div.menu3
{
    /*width:500px;margin:0 auto;*//*Uncomment this line to make the menu center-aligned.*/
    text-align:center;
    font-size:0;
    height: 25px;
    /*position:relative;*top:1px;/*Hacks for IE6 & IE7 */
}

div.menu3 a
{
    display: inline-block;
    padding: 0 20px;
    margin-right:1px; /* It specifies the distance between each tab */
    background:#F7F7F7;
    color:Black;
    text-decoration:none;
    font: normal 12px Arial;
    line-height: 24px;
    border:1px solid #CAD0DB;
    border-bottom:0;
    color:#666;
    vertical-align:top;/*ChangeSet#2*/
    text-decoration:none;
}

div.menu3 a:hover, div.menu3 a.current
{
    background:#E9ECF0;
    line-height: 25px;
    color:#000;
}

div.menu3sub
{
    height:6px;
    border:1px solid #CAD0DB;
    background:#E9ECF0;
}
</style>
<h1><?php
//echo $this->uniqueId . '/' . $this->action->id;
echo '';
?></h1>
<?php $this->beginWidget('zii.widgets.CPortlet' , array(
			'title'=>'Gestion des évaluations',
		)); ?>
<div class="evalmenu">
<ul>
   <li> <?php echo CHtml::link('Gestion des examens',array('/Examens/examens')); ?></li>
   <li> <?php echo CHtml::link('Gestion des notes des élèves',array('/Examens/evaluer')); ?></li> 
</ul>
</div>
<?php $this->endWidget(); ?>

<p>
Gérer efficacement les évaluations de votre établissement.
</p>
<p>
    Ceci à travers la gestion des examens et la gestion des notes des élèves aux différents examens
</p>

<p>

</p>