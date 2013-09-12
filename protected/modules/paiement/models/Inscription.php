<?php

/**
 * This is the model class for table "inscription".
 *
 * The followings are the available columns in table 'inscription':
 * @property integer $ANNEEACADEMIQUE_ID
 * @property integer $ELEVE_ID
 * @property integer $CLASSE_ID
 * @property integer $ETABLISSEMENT_ID
 * @property string $DATE
 * @property integer $NUMERO
 * @property string $inscription_id
 *
 * The followings are the available model relations:
 * @property Anneeacademiques $aNNEEACADEMIQUE
 * @property Eleves $eLEVE
 * @property Classes $cLASSE
 * @property Etablissements $eTABLISSEMENT
 */
class Inscription extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Inscription the static model class
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
		return 'inscription';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ANNEEACADEMIQUE_ID, ELEVE_ID, CLASSE_ID, ETABLISSEMENT_ID, NUMERO', 'numerical', 'integerOnly'=>true),
			array('inscription_id', 'length', 'max'=>255),
                        array('ANNEEACADEMIQUE_ID, ELEVE_ID, CLASSE_ID, ETABLISSEMENT_ID', 'required'),
			array('DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ANNEEACADEMIQUE_ID, ELEVE_ID, CLASSE_ID, ETABLISSEMENT_ID, DATE, NUMERO, inscription_id', 'safe', 'on'=>'search'),
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
			'cLASSE' => array(self::BELONGS_TO, 'Classes', 'CLASSE_ID'),
			'eTABLISSEMENT' => array(self::BELONGS_TO, 'Etablissements', 'ETABLISSEMENT_ID'),
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
			'CLASSE_ID' => 'Classe',
			'ETABLISSEMENT_ID' => 'Etablissement',
			'DATE' => 'Date',
			'NUMERO' => 'Numero',
			'inscription_id' => 'Identifiant',
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
		$criteria->compare('ETABLISSEMENT_ID',$this->ETABLISSEMENT_ID);
		$criteria->compare('DATE',$this->DATE,true);
		$criteria->compare('NUMERO',$this->NUMERO);
		$criteria->compare('inscription_id',$this->inscription_id,true);

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
                        //mise à jour de la date d'inscription et de l'identifiant avant enregistrement
                        $today = date('Y-m-d');
                        $this->DATE=$today;
                        $this->inscription_id=((string)$this->ANNEEACADEMIQUE_ID)."#".((string)$this->ELEVE_ID)."#".((string)$this->ETABLISSEMENT_ID);
                        //Recherchons si un enregistrement pareil existe déjà pour eviter les doublons
                        $existDeja= Inscription::model()->findByPk($this->inscription_id);
                        if($existDeja!=null){
                           // alors l'elève concerné est déjà inscrit, il faut alors informer l'utilisateur
                           throw new CDbException(Yii::t('yii',"L'élève est déjà inscrit: Impossible de l'inscrire de nouveau!!!"));
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
			if($this->inscription_id===null)
				$this->inscription_id=$this->getPrimaryKey();
                        // on met à jour tous les champs même la clé puisque la clé est une concatenation d'un certain
                        //des champs de l'entité
                        $oldPrimaryKey=$this->inscription_id;
                        //mise à jour de la nouvelle clé primaire
                        $this->inscription_id=((string)$this->ANNEEACADEMIQUE_ID)."#".((string)$this->ELEVE_ID)."#".((string)$this->CLASSE_ID)."#".((string)$this->ETABLISSEMENT_ID);
                        //mise à jour de l'entité en fonction de l'ancienne clé primaire
                        $this->updateAll(array('inscription_id'=>$this->inscription_id,'ELEVE_ID'=>$this->eLEVE->ELEVE_ID,
                                'CLASSE_ID'=>$this->cLASSE->CLASSE_ID,'ETABLISSEMENT_ID'=>$this->eTABLISSEMENT->ETABLISSEMENT_ID,
                            'NUMERO'=>$this->NUMERO),'inscription_id='.$oldPrimaryKey);
			$this->inscription_id=$this->getPrimaryKey();
			$this->afterSave();
			return true;
		}
		else
			return false;
	}
}