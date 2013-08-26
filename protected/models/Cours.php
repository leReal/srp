<?php

/**
 * This is the model class for table "cours".
 *
 * The followings are the available columns in table 'cours':
 * @property integer $COURS_ID
 * @property integer $ETABLISSEMENT_ID
 * @property string $NOM
 * @property string $DESCRIPTION
 *
 * The followings are the available model relations:
 * @property Etablissements $eTABLISSEMENT
 * @property Enseigner[] $enseigners
 * @property Evaluer[] $evaluers
 */
class Cours extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cours the static model class
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
		return 'cours';
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
			array('NOM', 'length', 'max'=>255),
			array('DESCRIPTION', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('COURS_ID, ETABLISSEMENT_ID, NOM, DESCRIPTION', 'safe', 'on'=>'search'),
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
			'enseigners' => array(self::HAS_MANY, 'Enseigner', 'COURS_ID'),
			'evaluers' => array(self::HAS_MANY, 'Evaluer', 'COURS_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'COURS_ID' => 'Cours',
			'ETABLISSEMENT_ID' => 'Etablissement',
			'NOM' => 'Nom',
			'DESCRIPTION' => 'Description',
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

		$criteria->compare('COURS_ID',$this->COURS_ID);
		$criteria->compare('ETABLISSEMENT_ID',$this->ETABLISSEMENT_ID);
		$criteria->compare('NOM',$this->NOM,true);
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}