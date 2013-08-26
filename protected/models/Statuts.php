<?php

/**
 * This is the model class for table "statuts".
 *
 * The followings are the available columns in table 'statuts':
 * @property integer $STATUT_ID
 * @property string $NOM
 * @property string $DESCRIPTION
 * @property integer $TYPE
 *
 * The followings are the available model relations:
 * @property Eleves[] $eleves
 * @property Enseignants[] $enseignants
 */
class Statuts extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Statuts the static model class
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
		return 'statuts';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('TYPE', 'numerical', 'integerOnly'=>true),
			array('NOM', 'length', 'max'=>255),
			array('DESCRIPTION', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('STATUT_ID, NOM, DESCRIPTION, TYPE', 'safe', 'on'=>'search'),
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
			'eleves' => array(self::HAS_MANY, 'Eleves', 'STATUT_ID'),
			'enseignants' => array(self::HAS_MANY, 'Enseignants', 'STATUT_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'STATUT_ID' => 'Statut',
			'NOM' => 'Nom',
			'DESCRIPTION' => 'Description',
			'TYPE' => 'Type',
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

		$criteria->compare('STATUT_ID',$this->STATUT_ID);
		$criteria->compare('NOM',$this->NOM,true);
		$criteria->compare('DESCRIPTION',$this->DESCRIPTION,true);
		$criteria->compare('TYPE',$this->TYPE);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}