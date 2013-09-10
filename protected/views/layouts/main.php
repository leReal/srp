<?php /* @var $this Controller */ ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />

	<!-- blueprint CSS framework -->
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>

<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	<div id="mainMbMenu">
		<?php $this->widget('application.extensions.mbmenu.MbMenu',array(
			'items'=>array(
                               	array('label'=>'Accueil', 'url'=>array('/site/index'),
                                     'items'=>array(
                                       array('label'=>'Elèves','url'=>array('/eleves/index'),'visible'=>!Yii::app()->user->isGuest),
                                       array('label'=>'Enseignants','url'=>array('/enseignants/index'),'visible'=>!Yii::app()->user->isGuest),
                                       array('label'=>'Classes','url'=>array('/classes/index'),'visible'=>!Yii::app()->user->isGuest), 
                                      array('label'=>'Cours','url'=>array('/cours/index'),'visible'=>!Yii::app()->user->isGuest), 
                                     ),),
                                array('label'=>'Connexion', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest), 
                            array('label'=>'Enseignements', 'url'=>array('/enseignant'), 
                                         'items'=>array( 
                                          array('label'=>'Enseigner', 'url'=>array('/enseignant/enseigner')), 
                                         ),'visible'=>!Yii::app()->user->isGuest 
                                       ),
		                array('label'=>'Paiement', 'url'=>array('/paiement'), 
                                         'items'=>array( 
                                          array('label'=>'Type de paiement', 'url'=>array('/paiement/Typepaiements')), 
                                          array('label'=>'Inscriptions', 'url'=>array('/paiement/Inscription')), 
                                          array('label'=>'Frais de Pension', 'url'=>array('/paiement/Payement')),  
                                           ),'visible'=>!Yii::app()->user->isGuest 
                                       ),
                            array('label'=>'Evaluation', 'url'=>array('/Examens'),
                                'items'=>array(
                                 array('label'=>'Gestion des Examens', 'url'=>array('/Examens/examens')), 
                                 array('label'=>'Gestion des notes des élèves', 'url'=>array('/Examens/evaluer')), 
                                    ),'visible'=>!Yii::app()->user->isGuest
                                ),
                            
                        array('label'=>'Administration', 'url'=>array('/site/administration'),
                                       'items'=>array(
                                    array('label'=>'Années Académiques','url'=>array('/anneeacademiques/index')), 
                                   // array('label'=>'Classes','url'=>array('/classes/index')), 
                                   // array('label'=>'Cours','url'=>array('/cours/index')), 
                                  array('label'=>'Etablissement','url'=>array('/etablissements/index')),
                                  //  array('label'=>'Examen','url'=>array('/examens/index')),
                                    array('label'=>'Sociéte','url'=>array('/societes/index')),
                                    array('label'=>'Statut','url'=>array('/statuts/index')),
                                    array('label'=>'Accesoires','url'=>array('/accesoires/index')),
                                    array('label'=>'Utilisateurs','url'=>array('utilisateurs/index')),
                                    array('label'=>'Permissions','url'=>array('/rights')),
                                    ),'visible'=>!Yii::app()->user->isGuest), 
                            
			array('label'=>'Déconnexion ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->
	<?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
			'links'=>$this->breadcrumbs,
		)); ?><!-- breadcrumbs -->
	<?php endif?>

	<?php echo $content; ?>

	<div class="clear"></div>

	<div id="footer">
		Copyright &copy; <?php echo date('Y'); ?> by LeReal.<br/>
		All Rights Reserved.<br/>
		<?php echo "Powered by LeReal"; ?>
	</div><!-- footer -->

</div><!-- page -->

</body>
</html>
