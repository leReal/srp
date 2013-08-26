<?php

class EvaluerController extends Controller
{
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
		$model=new Evaluer;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

//		if(isset($_POST['Evaluer']))
//		{
//			$model->attributes=$_POST['Evaluer'];
//			if($model->save())
//				$this->redirect(array('view','id'=>$model->EVAL_ID));
//		}
		$this->render('create_1',array(
			'model'=>$model,
		));
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
                        $aEnregistrer->setAttribute('EXAMENS_ID', $model->getAttribute('EXAMENS_ID'));
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
                  
                        if(count($result) == 1){
                           $aEnregistrer->setAttribute('MOYENE', $result[0]->getAttribute('MOYENE'));
                           $aEnregistrer->setAttribute('OBSERV', $result[0]->getAttribute('OBSERV'));
                        }

                        $this->listeEltsAEnregistrer[$i++] = $aEnregistrer;
                    }

//$model=$this->listeEltsAEnregistrer[0];

		}

		$this->render('create',array(
			'model'=>$model,
		));
                 
        }
}
