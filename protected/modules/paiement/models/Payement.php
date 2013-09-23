<?php

/**
 * This is the model class for table "payement".
 *
 * The followings are the available columns in table 'payement':
 * @property integer $ANNEEACADEMIQUE_ID
 * @property integer $ELEVE_ID
 * @property integer $CLASSE_ID
 * @property integer $TYPE_PAIEMENT_ID
 * @property integer $ESEIGNANT_ID
 * @property integer $ACCESOIRE_ID
 * @property integer $ETABLISSEMENT_ID
 * @property string $DATE
 * @property string $MONTANT
 * @property string $payement_id
 *
 * The followings are the available model relations:
 * @property Anneeacademiques $aNNEEACADEMIQUE
 * @property Eleves $eLEVE
 * @property Typepaiements $tYPEPAIEMENT
 * @property Enseignants $eSEIGNANT
 * @property Accesoires $aCCESOIRE
 * @property Etablissements $eTABLISSEMENT
 */
class Payement extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Payement the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'payement';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ANNEEACADEMIQUE_ID, ELEVE_ID, TYPE_PAIEMENT_ID, ESEIGNANT_ID, ACCESOIRE_ID, ETABLISSEMENT_ID', 'numerical', 'integerOnly'=>true),
			array('ANNEEACADEMIQUE_ID, ELEVE_ID, ETABLISSEMENT_ID,MONTANT', 'required'),
                        array('MONTANT', 'length', 'max'=>10),
			array('payement_id', 'length', 'max'=>255),
			array('DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ANNEEACADEMIQUE_ID, ELEVE_ID, CLASSE_ID, TYPE_PAIEMENT_ID, ESEIGNANT_ID, ACCESOIRE_ID, ETABLISSEMENT_ID, DATE, MONTANT, payement_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'aNNEEACADEMIQUE' => array(self::BELONGS_TO, 'Anneeacademiques', 'ANNEEACADEMIQUE_ID'),
			'eLEVE' => array(self::BELONGS_TO, 'Eleves', 'ELEVE_ID'),
			'tYPEPAIEMENT' => array(self::BELONGS_TO, 'Typepaiements', 'TYPE_PAIEMENT_ID'),
			'eSEIGNANT' => array(self::BELONGS_TO, 'Enseignants', 'ESEIGNANT_ID'),
			'aCCESOIRE' => array(self::BELONGS_TO, 'Accesoires', 'ACCESOIRE_ID'),
			'eTABLISSEMENT' => array(self::BELONGS_TO, 'Etablissements', 'ETABLISSEMENT_ID'),
                        'cLASSE' => array(self::BELONGS_TO, 'Classes', 'CLASSE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ANNEEACADEMIQUE_ID' => 'Année académique',
			'ELEVE_ID' => 'Eleve',
                        'CLASSE_ID'=>'Classe',
			'TYPE_PAIEMENT_ID' => 'Type de paiement',
			'ESEIGNANT_ID' => 'Enseignant',
			'ACCESOIRE_ID' => 'Accessoire',
			'ETABLISSEMENT_ID' => 'Etablissement',
			'DATE' => 'Date',
			'MONTANT' => 'Montant',
			'payement_id' => 'Identifiant',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ANNEEACADEMIQUE_ID',$this->ANNEEACADEMIQUE_ID);
		$criteria->compare('ELEVE_ID',$this->ELEVE_ID);
                $criteria->compare('CLASSE_ID',$this->CLASSE_ID);
                // On ne recherche que les paiements de type pension. le paiement de type pension a pour code 1
		$criteria->compare('TYPE_PAIEMENT_ID',1);
		$criteria->compare('ESEIGNANT_ID',$this->ESEIGNANT_ID);
		$criteria->compare('ACCESOIRE_ID',$this->ACCESOIRE_ID);
		$criteria->compare('ETABLISSEMENT_ID',$this->ETABLISSEMENT_ID);
		$criteria->compare('DATE',$this->DATE,true);
		$criteria->compare('MONTANT',$this->MONTANT,true);
		$criteria->compare('payement_id',$this->payement_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        /**
	 * Inserts a row into the table based on this active record attributes.
	 * If the table's primary key is auto-incremental and is null before insertion,
	 * it will be populated with the actual value after insertion.
	 * Note, validation is not performed in this method. You may call {@link validate} to perform the validation.
	 * After the record is inserted to DB successfully, its {@link isNewRecord} property will be set false,
	 * and its {@link scenario} property will be set to be 'update'.
	 * @param array $attributes list of attributes that need to be saved. Defaults to null,
	 * meaning all attributes that are loaded from DB will be saved.
	 * @return boolean whether the attributes are valid and the record is inserted successfully.
	 * @throws CDbException if the record is not new
	 */
	public function insert($attributes=null)
	{
		if(!$this->getIsNewRecord())
			throw new CDbException(Yii::t('yii','The active record cannot be inserted to database because it is not new.'));
		if($this->beforeSave())
		{
			Yii::trace(get_class($this).'.insert()','system.db.ar.CActiveRecord');
			$builder=$this->getCommandBuilder();
			$table=$this->getMetaData()->tableSchema;
                        //Avant de réaliser le paiement de la pension d'un élève, s'assurer que 
                        //l'élève est déjà inscrit. Pour cela nous allons rechercher une inscription
                        //pour l'élève donné
                        $eleve=$this->eLEVE->ELEVE_ID;
                        $exist=  Inscription::model()->find('ELEVE_ID='.$eleve);
                        if($exist==NULL)
                            throw new CDbException(Yii::t('yii',"L'élève n'est pas encore inscrit. Impossible d'effectuer le paiement!!! ".$exist));
                        //mise à jour de la date de paiement et de l'identifiant avant enregistrement
                        $this->CLASSE_ID=$exist->CLASSE_ID;
                        $today = date('Y-m-d');
                        $this->TYPE_PAIEMENT_ID=1;
                        $this->DATE=$today;
                        $this->payement_id=((string)$this->ANNEEACADEMIQUE_ID)."#".((string)$this->TYPE_PAIEMENT_ID)."#".((string)$this->ETABLISSEMENT_ID)."#".(gmdate("Y-m-d\TH:i:s",time()));
                        //Recherchons si un enregistrement pareil existe déjà pour eviter les doublons
                        $existDeja=  Payement::model()->findByPk($this->payement_id);
                        if($existDeja!=null){
                           // alors ce paiement existe déjà il faut notifier l'utilisateur
                           throw new CDbException(Yii::t('yii',"Ce paiement a déjà été effectué. Impossible de le refaire à nouveau!!!"));
                        }
			$command=$builder->createInsertCommand($table,$this->getAttributes($attributes));
			if($command->execute())
			{
				$primaryKey=$table->primaryKey;
				if($table->sequenceName!==null)
				{
					if(is_string($primaryKey) && $this->$primaryKey===null)
						$this->$primaryKey=$builder->getLastInsertID($table);
					elseif(is_array($primaryKey))
					{
						foreach($primaryKey as $pk)
						{
							if($this->$pk===null)
							{
								$this->$pk=$builder->getLastInsertID($table);
								break;
							}
						}
					}
				}
				$this->_pk=$this->getPrimaryKey();
				$this->afterSave();
				$this->setIsNewRecord(false);
				$this->setScenario('update');
				return true;
			}
		}
		return false;
	}  
        
        /**
	 * Updates the row represented by this active record.
	 * All loaded attributes will be saved to the database.
	 * Note, validation is not performed in this method. You may call {@link validate} to perform the validation.
	 * @param array $attributes list of attributes that need to be saved. Defaults to null,
	 * meaning all attributes that are loaded from DB will be saved.
	 * @return boolean whether the update is successful
	 * @throws CDbException if the record is new
	 */
	public function update($attributes=null)
	{
		if($this->getIsNewRecord())
			throw new CDbException(Yii::t('yii','The active record cannot be updated because it is new.'));
		if($this->beforeSave())
		{
			Yii::trace(get_class($this).'.update()','system.db.ar.CActiveRecord');
			if($this->payement_id===null)
				$this->payement_id=$this->getPrimaryKey();
                        // on met à jour tous les champs même la clé puisque la clé est une concatenation d'un certain
                        //des champs de l'entité
                        $oldPrimaryKey=$this->payement_id;
                        //mise à jour de la nouvelle clé primaire
                        $this->payement_id=((string)$this->ANNEEACADEMIQUE_ID)."#".((string)$this->TYPE_PAIEMENT_ID)."#".((string)$this->ETABLISSEMENT_ID);
                        //mise à jour de l'entité en fonction de l'ancienne clé primaire
                        $this->updateAll(array('payement_id'=>$this->payement_id,'ELEVE_ID'=>$this->eLEVE->ELEVE_ID,
                                'TYPE_PAIEMENT_ID'=>$this->tYPEPAIEMENT->TYPE_PAIEMENT_ID,'ETABLISSEMENT_ID'=>$this->eTABLISSEMENT->ETABLISSEMENT_ID,
                            'MONTANT'=>$this->MONTANT,'ANNEEACADEMIQUE_ID'=>$this->aNNEEACADEMIQUE->ANNEEACADEMIQUE_ID),'payement_id='.$oldPrimaryKey);
			$this->payement_id=$this->getPrimaryKey();
			$this->afterSave();
			return true;
		}
		else
			return false;
	}
}