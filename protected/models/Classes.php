<?php

/**
 * This is the model class for table "classes".
 *
 * The followings are the available columns in table 'classes':
 * @property integer $CLASSE_ID
 * @property integer $ETABLISSEMENT_ID
 * @property string $NOM
 * @property string $NIVEAU
 * @property string $FRAIS_SCOLARITE
 * @property string $MOYENE
 *
 * The followings are the available model relations:
 * @property Etablissements $eTABLISSEMENT
 * @property Enseigner[] $enseigners
 * @property Inscription[] $inscriptions
 */
class Classes extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Classes the static model class
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
		return 'classes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ETABLISSEMENT_ID', 'numerical', 'integerOnly'=>true),
			array('NOM, NIVEAU', 'length', 'max'=>255),
			array('FRAIS_SCOLARITE, MOYENE', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('CLASSE_ID, ETABLISSEMENT_ID, NOM, NIVEAU, FRAIS_SCOLARITE, MOYENE', 'safe', 'on'=>'search'),
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
			'eTABLISSEMENT' => array(self::BELONGS_TO, 'Etablissements', 'ETABLISSEMENT_ID'),
			'enseigners' => array(self::HAS_MANY, 'Enseigner', 'CLASSE_ID'),
			'inscriptions' => array(self::HAS_MANY, 'Inscription', 'CLASSE_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'CLASSE_ID' => 'Classe',
			'ETABLISSEMENT_ID' => 'Etablissement',
			'NOM' => 'Nom',
			'NIVEAU' => 'Niveau',
			'FRAIS_SCOLARITE' => 'Montant Frais Scolarité',
			'MOYENE' => 'Moyene',
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

		$criteria->compare('CLASSE_ID',$this->CLASSE_ID);
		$criteria->compare('ETABLISSEMENT_ID',$this->ETABLISSEMENT_ID);
		$criteria->compare('NOM',$this->NOM,true);
		$criteria->compare('NIVEAU',$this->NIVEAU,true);
		$criteria->compare('FRAIS_SCOLARITE',$this->FRAIS_SCOLARITE,true);
		$criteria->compare('MOYENE',$this->MOYENE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}