<?php

Yii::import('application.extensions.ireport.*');
class EvaluerController extends Controller
{
    // Type :  Evaluer_To_Save()
        public $evaluerToSave ;

        public $rechercheEffectueePourCreation = 0;
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

        /**
         * Liste des éléments à enregistrer
         * @var array
         */
        public $listeEltsAEnregistrer = array();
	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
                        array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','Rechercher'),
				'users'=>array('admin'),
			),
                        array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','create_1'),
				'users'=>array('admin'),
			),
                        array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','afficherPageRapport'),
				'users'=>array('admin'),
			),
                        array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','reportBulletin'),
				'users'=>array('admin'),
			),
                        array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','annuler_1'),
				'users'=>array('admin'),
			),
                        array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','confBulletin'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
        public function actionCreate_1()
	{
                $value1=new Evaluer();
                $model_de_base=new Evaluer();
                $this->listeEltsAEnregistrer = array();
                $this->evaluerToSave = new Evaluer_To_Save();
                $save = true;

//                $model_de_base = $this->listeEltsAEnregistrer[0];
//                $model_de_base->setAttribute('ANNEEACADEMIQUE_ID', 1);
//                $model_de_base->setAttribute('ETABLISSEMENT_ID', 1);
//                $model_de_base->setAttribute('DATE', date("y.m.d") );


                $nb_enreg = $_POST['NB_ENREG'];//count($this->listeEltsAEnregistrer);
//                echo 'NB enreg : '.$nb_enreg;
                for($i = 0; $i < $nb_enreg; $i++){
                    $value1 =  new Evaluer();

                    $value1->setIsNewRecord($_POST['NEW_RECORD'.$i] == 1);
                    $value1->setAttribute('MOYENE', $_POST['MOY'.$i]);
                    $value1->setAttribute('OBSERV', $_POST['OBS'.$i]);
                    $value1->setAttribute('ELEVE_ID', $_POST['ELEVE_ID'.$i]);
                    $value1->setAttribute('COURS_ID', $_POST['COURS_ID'.$i]);
                    $value1->setAttribute('EXAMEN_ID', $_POST['EXAMEN_ID'.$i]);
                    $value1->setAttribute('CLASSE_ID', $_POST['CLASSE_ID'.$i]);
                    $value1->setAttribute('EVAL_ID', $i);


                        $value1->setAttribute('ANNEEACADEMIQUE_ID', 1);
                        $value1->setAttribute('ETABLISSEMENT_ID', 1);
                        $value1->setAttribute('DATE', date("y.m.d") );
                        // Dans une classe donnée, pour un examen donné et pour année académique donnée
                        // un elève doit avoir une seule note. S'il est déja présent on le modifie
                        $evaluer = new Evaluer();

                        $attribute = array('COURS_ID' => $value1->getAttribute('COURS_ID'),
                                        'EXAMEN_ID'=> $value1->getAttribute('EXAMEN_ID'),
                                        'ANNEEACADEMIQUE_ID' => $value1->getAttribute('ANNEEACADEMIQUE_ID'),
                                        'ELEVE_ID' => $value1->getAttribute('ELEVE_ID'));


                    $result = $evaluer->findAllByAttributes($attribute);
                   // echo 'Resultat : '.count($result).' '.$value1->MOYENE.' ELEVE- '.$value1->ELEVE_ID.' Cours : '.$value1->COURS_ID.' Examen '.$value1->EXAMEN_ID.' Classe '.$value1->CLASSE_ID;
                   if(count($result) == 0){

                       $value1->setIsNewRecord(true);
                   }else  if(count($result) == 1){

                       $value1->setIsNewRecord(false);
                       $value1->setAttribute('EVAL_ID', $result[0]->EVAL_ID);

                   }
                   $model_de_base = $value1;
                   if($value1->save()){
                       $this->listeEltsAEnregistrer[$i] = $value1;
                       $save = $save && true;
                   }else{
                       $save = $save && false;
                   }
                    $this->evaluerToSave->ajouterEvaluer($value1);

		}// fin boucle for

                if($save){
                    $model_de_base->setIsNewRecord(true);
                    $this->render('create',array(
			'model'=>$model_de_base,
                    ));
                }else{
                    $this->render('create_1',array(
			'model'=>$this->evaluerToSave,
                    ));
                }
	}
	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	
//        public function actionCreate()
//	{
//		$model=new Evaluer;
//
//		// Uncomment the following line if AJAX validation is needed
//		// $this->performAjaxValidation($model);
//
//		if(isset($_POST['Evaluer']))
//		{
//			$model->attributes=$_POST['Evaluer'];
//                        echo 'Evaluer : '.$model->attributes.' Taille : '.count($_POST);
//                        print_r($_POST);
//
//                        echo 'On sauve : '.count($this->listeEltsAEnregistrer);
//                        foreach ($this->listeEltsAEnregistrer as $value) {
//                            $model = $value;
//                            //$value->save();
//                            $model->save();
//                        }
//			//if($model->save())
//				//$this->redirect(array('view','id'=>$model->EVAL_ID));
//		}
//
//		$this->render('create',array(
//			'model'=>$model,
//		));
//	}
        public function actionCreate()
	{
		$model=new Evaluer;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Evaluer']))
		{
			$model->attributes=$_POST['Evaluer'];
                        $model->setAttribute('ANNEEACADEMIQUE_ID', 1);
                        $model->setAttribute('ETABLISSEMENT_ID', 1);
                        $model->setAttribute('DATE', date("y.m.d") );

                        // Dans une classe donnée, pour un examen donné et pour année académique donnée
                        // un elève doit avoir une seule note. S'il est déja présent on le modifie
                        $evaluer = new Evaluer();

                        $attribute = array('COURS_ID' => $model->getAttribute('COURS_ID'),
                                        'EXAMEN_ID'=> $model->getAttribute('EXAMEN_ID'),
                                        'ANNEEACADEMIQUE_ID' => $model->getAttribute('ANNEEACADEMIQUE_ID'),
                                        'ELEVE_ID' => $model->getAttribute('ELEVE_ID'));


                    $result = $evaluer->findAllByAttributes($attribute);
                    echo 'Resultat : '.count($result);
                   if(count($result) == 0){

                       $model->setIsNewRecord(true);
                   }else  if(count($result) == 1){

                       $model->setIsNewRecord(false);
                       $model->setAttribute('EVAL_ID', $result[0]->EVAL_ID);

                   }
                   if($model->save())
			$this->redirect(array('view','id'=>$model->EVAL_ID));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Evaluer']))
		{
			$model->attributes=$_POST['Evaluer'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->EVAL_ID));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{
		$this->loadModel($id)->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Evaluer');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new Evaluer('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['Evaluer']))
			$model->attributes=$_GET['Evaluer'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id)
	{
		$model=Evaluer::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='evaluer-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}

        public function actionRechercher(){

                $this->evaluerToSave = new Evaluer_To_Save();
                $model2=new Inscription();
                $model=new Evaluer();

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Evaluer']))
		{
                    // On reccupere les éléments sélectionner sur la vue
                    $model->attributes=$_POST['Evaluer'];
                    $model2->setAttribute('CLASSE_ID', $model->getAttribute('CLASSE_ID'));

                    // Si on a sélectionné un éléève en particulier, ajouter son ID comme critere de
                    // recherche, sinon ne pas inclure l'élève dans les criteres de recherche
                    if($model->getAttribute('ELEVE_ID') != 0){
                        $model2->setAttribute('ELEVE_ID', $model->getAttribute('ELEVE_ID'));
                        $attrubute = array('ELEVE_ID' => $model->getAttribute('ELEVE_ID'),
                                        'CLASSE_ID'=> $model->getAttribute('CLASSE_ID'));
                    }else{
                         $attrubute = array('CLASSE_ID'=> $model->getAttribute('CLASSE_ID'));
                    }
                 
                    $i = 0;
                    foreach ($model2->findAllByAttributes($attrubute) as $value) {
                        $inscritDansLaClasse = $value;
                        $aEnregistrer = new Evaluer();//$model;
                        $aEnregistrer->setAttribute('CLASSE_ID', $model->getAttribute('CLASSE_ID'));
                        $aEnregistrer->setAttribute('COURS_ID', $model->getAttribute('COURS_ID'));
                        $aEnregistrer->setAttribute('EXAMEN_ID', $model->getAttribute('EXAMEN_ID'));
                        $aEnregistrer->setAttribute('ELEVE_ID', $value->getAttribute('ELEVE_ID'));
                        $aEnregistrer->setAttribute('ANNEEACADEMIQUE_ID', 1);

                        // Rechercher dans la table de note (Evaluer) si l'élève possède deja une note
                        $modelEvalRecherche = new Evaluer();

                        // Criteres de recherche (ID de l'élève, ID de l'exam, Cours ID) dans Evaluer
                        $attrubute2 = array('ELEVE_ID' => $value->getAttribute('ELEVE_ID'),
                                        'EXAMEN_ID' => $model->getAttribute('EXAMEN_ID'),
                                        'COURS_ID' => $model->getAttribute('COURS_ID')) ;
                        // Recherche proprement dite
                        $result = $modelEvalRecherche->findAllByAttributes($attrubute2);

                        // S'il ya un résultat lui affecter à la moyenne et l'observation

                        Yii::log('Apres recherche element trouve : '.count($result));
                        if(count($result) == 1){
                           $aEnregistrer->setAttribute('MOYENE', $result[0]->getAttribute('MOYENE'));
                           $aEnregistrer->setAttribute('OBSERV', $result[0]->getAttribute('OBSERV'));
                        }

                        $this->listeEltsAEnregistrer[$i++] = $aEnregistrer;
                        $this->evaluerToSave->ajouterEvaluer($aEnregistrer);
                    }

//$model=$this->listeEltsAEnregistrer[0];

		}

                $this->rechercheEffectueePourCreation = 1;
		$this->render('create_1',array(
			'model'=>$this->evaluerToSave,
		));
                 
        }

   public function actionAfficherPageRapport(){
       $model = new Evaluer();
       $this->render('create_2',array(
			'model'=>$model,
		));
   }
   public function actionReportBulletin()
    {

        $this->render('jasper');
    }
     public function actionConfBulletin()
    {

        $model = new Evaluer();
        $this->render('conf_bulletin',array(
			'model'=>$model,
		));
    }
    public function actionAnnuler_1()
    {

        $model = new Evaluer();
        $this->render('create',array(
			'model'=>$model,
		));
    }
}
?>