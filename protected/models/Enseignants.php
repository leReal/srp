<?php

/**
 * This is the model class for table "enseignants".
 *
 * The followings are the available columns in table 'enseignants':
 * @property integer $ESEIGNANT_ID
 * @property integer $ETABLISSEMENT_ID
 * @property integer $STATUT_ID
 * @property string $NOM
 * @property string $PRENOM
 * @property string $LOGIN
 * @property string $PASSWORD
 * @property string $TELEPHONE
 *
 * The followings are the available model relations:
 * @property Etablissements $eTABLISSEMENT
 * @property Statuts $sTATUT
 * @property Enseigner[] $enseigners
 * @property Payement[] $payements
 */
class Enseignants extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Enseignants the static model class
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
		return 'enseignants';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ETABLISSEMENT_ID, STATUT_ID', 'numerical', 'integerOnly'=>true),
			array('NOM, PRENOM, LOGIN, PASSWORD, TELEPHONE', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ESEIGNANT_ID, ETABLISSEMENT_ID, STATUT_ID, NOM, PRENOM, LOGIN, PASSWORD, TELEPHONE', 'safe', 'on'=>'search'),
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
			'sTATUT' => array(self::BELONGS_TO, 'Statuts', 'STATUT_ID'),
			'enseigners' => array(self::HAS_MANY, 'Enseigner', 'ESEIGNANT_ID'),
			'payements' => array(self::HAS_MANY, 'Payement', 'ESEIGNANT_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ESEIGNANT_ID' => 'Eseignant',
			'ETABLISSEMENT_ID' => 'Etablissement',
			'STATUT_ID' => 'Statut',
			'NOM' => 'Nom',
			'PRENOM' => 'Prenom',
			'LOGIN' => 'Login',
			'PASSWORD' => 'Password',
			'TELEPHONE' => 'Telephone',
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

		$criteria->compare('ESEIGNANT_ID',$this->ESEIGNANT_ID);
		$criteria->compare('ETABLISSEMENT_ID',$this->ETABLISSEMENT_ID);
		$criteria->compare('STATUT_ID',$this->STATUT_ID);
		$criteria->compare('NOM',$this->NOM,true);
		$criteria->compare('PRENOM',$this->PRENOM,true);
		$criteria->compare('LOGIN',$this->LOGIN,true);
		$criteria->compare('PASSWORD',$this->PASSWORD,true);
		$criteria->compare('TELEPHONE',$this->TELEPHONE,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}