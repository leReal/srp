<?php

/**
 * This is the model class for table "Evaluer".
 *
 * The followings are the available columns in table 'Evaluer':
 * @property integer $ELEVE_ID
 * @property integer $ANNEEACADEMIQUE_ID
 * @property integer $COURS_ID
 * @property integer $EXAMEN_ID
 * @property integer $ETABLISSEMENT_ID
 * @property string $DATE
 * @property string $MOYENE
 * @property integer $CLASSE_ID
 * @property string $OBSERV
 * @property integer $EVAL_ID
 * @property array $TO_SAVE
 */
class Evaluer extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Evaluer the static model class
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
		return 'Evaluer';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ELEVE_ID, COURS_ID, EXAMEN_ID, CLASSE_ID, MOYENE', 'required'),
			array('ELEVE_ID, ANNEEACADEMIQUE_ID, COURS_ID, EXAMEN_ID, ETABLISSEMENT_ID, CLASSE_ID', 'numerical', 'integerOnly'=>true),
//			array('MOYENE','numerical'),
//                        array('MOYENE', 'length', 'max'=>6),
			array('OBSERV', 'length', 'max'=>255),
			array('DATE', 'safe'),
//                        array('MOYENE','validateMoyenne', 'message'=>'La note doit être comprise entre 0 et 20'),
			
                        array('MOYENE','numerical',
                                'min'=>0,
                                'max'=>20,
                                'tooSmall'=>'Valeur minimale de la note : 0',
                                'tooBig'=>'Valeur maximale de la note : 20'),

                        // The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ELEVE_ID, ANNEEACADEMIQUE_ID, COURS_ID, EXAMEN_ID, ETABLISSEMENT_ID, DATE, MOYENE, CLASSE_ID, OBSERV, EVAL_ID', 'safe', 'on'=>'search'),
		);
	}
        public function validateMoyenne(){
            Yii::log('validateMoyenne validons '.$this->MOYENE);
            return 0 > $this->MOYENE || $this->MOYENE > 20;
        }

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ELEVE_ID' => 'Eleve',
			'ANNEEACADEMIQUE_ID' => 'Anneeacademique',
			'COURS_ID' => 'Cours',
			'EXAMEN_ID' => 'Examen',
			'ETABLISSEMENT_ID' => 'Etablissement',
			'DATE' => 'Date',
			'MOYENE' => 'Moyene',
			'CLASSE_ID' => 'Classe',
			'OBSERV' => 'Observ',
			'EVAL_ID' => 'Eval',
                        'TO_SAVE' => 'A Enregistrer',
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

		$criteria->compare('ELEVE_ID',$this->ELEVE_ID);
		$criteria->compare('ANNEEACADEMIQUE_ID',$this->ANNEEACADEMIQUE_ID);
		$criteria->compare('COURS_ID',$this->COURS_ID);
		$criteria->compare('EXAMEN_ID',$this->EXAMEN_ID);
		$criteria->compare('ETABLISSEMENT_ID',$this->ETABLISSEMENT_ID);
		$criteria->compare('DATE',$this->DATE,true);
		$criteria->compare('MOYENE',$this->MOYENE,true);
		$criteria->compare('CLASSE_ID',$this->CLASSE_ID);
		$criteria->compare('OBSERV',$this->OBSERV,true);
		$criteria->compare('EVAL_ID',$this->EVAL_ID);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

}