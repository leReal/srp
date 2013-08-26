<?php

/**
 * This is the model class for table "payement".
 *
 * The followings are the available columns in table 'payement':
 * @property integer $ANNEEACADEMIQUE_ID
 * @property integer $ELEVE_ID
 * @property integer $TYPE_PAIEMENT_ID
 * @property integer $ESEIGNANT_ID
 * @property integer $ACCESOIRE_ID
 * @property integer $ETABLISSEMENT_ID
 * @property string $DATE
 * @property string $MONTANT
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
			array('ANNEEACADEMIQUE_ID, TYPE_PAIEMENT_ID', 'required'),
			array('ANNEEACADEMIQUE_ID, ELEVE_ID, TYPE_PAIEMENT_ID, ESEIGNANT_ID, ACCESOIRE_ID, ETABLISSEMENT_ID', 'numerical', 'integerOnly'=>true),
			array('MONTANT', 'length', 'max'=>10),
			array('DATE', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ANNEEACADEMIQUE_ID, ELEVE_ID, TYPE_PAIEMENT_ID, ESEIGNANT_ID, ACCESOIRE_ID, ETABLISSEMENT_ID, DATE, MONTANT', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ANNEEACADEMIQUE_ID' => 'Anneeacademique',
			'ELEVE_ID' => 'Eleve',
			'TYPE_PAIEMENT_ID' => 'Type Paiement',
			'ESEIGNANT_ID' => 'Eseignant',
			'ACCESOIRE_ID' => 'Accesoire',
			'ETABLISSEMENT_ID' => 'Etablissement',
			'DATE' => 'Date',
			'MONTANT' => 'Montant',
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
		$criteria->compare('TYPE_PAIEMENT_ID',$this->TYPE_PAIEMENT_ID);
		$criteria->compare('ESEIGNANT_ID',$this->ESEIGNANT_ID);
		$criteria->compare('ACCESOIRE_ID',$this->ACCESOIRE_ID);
		$criteria->compare('ETABLISSEMENT_ID',$this->ETABLISSEMENT_ID);
		$criteria->compare('DATE',$this->DATE,true);
		$criteria->compare('MONTANT',$this->MONTANT,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}