<?php

/**
 * This is the model class for table "enseigner".
 *
 * The followings are the available columns in table 'enseigner':
 * @property integer $ESEIGNANT_ID
 * @property integer $ANNEEACADEMIQUE_ID
 * @property integer $CLASSE_ID
 * @property integer $COURS_ID
 * @property integer $ETABLISSEMENT_ID
 * @property string $ROLE
 * @property string $enseigner_id
 *
 * The followings are the available model relations:
 * @property Enseignants $eSEIGNANT
 * @property Anneeacademiques $aNNEEACADEMIQUE
 * @property Classes $cLASSE
 * @property Cours $cOURS
 * @property Etablissements $eTABLISSEMENT
 */
class Enseigner extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Enseigner the static model class
	 */
	const PAGER=15;
	public $var_DATEDEB;
	public $var_DATEFIN;
	public $var_CLASSE;
	public $var_COURS;
	public $var_ETABLISSEMENT;
	public $var_NOMENSEIGNANT;
	public $var_PRENOMENSEIGNANT;
	 
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'enseigner';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ESEIGNANT_ID, ANNEEACADEMIQUE_ID, CLASSE_ID, COURS_ID, ETABLISSEMENT_ID, enseigner_id', 'required'),
			array('ESEIGNANT_ID, ANNEEACADEMIQUE_ID, CLASSE_ID, COURS_ID, ETABLISSEMENT_ID', 'numerical', 'integerOnly'=>true),
			array('ROLE', 'length', 'max'=>250),
			array('enseigner_id', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('ESEIGNANT_ID, ANNEEACADEMIQUE_ID, CLASSE_ID, COURS_ID, ETABLISSEMENT_ID, ROLE, enseigner_id', 'safe', 'on'=>'search'),
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
			'eSEIGNANT' => array(self::BELONGS_TO, 'Enseignants', 'ESEIGNANT_ID'),
			'aNNEEACADEMIQUE' => array(self::BELONGS_TO, 'Anneeacademiques', 'ANNEEACADEMIQUE_ID'),
			'cLASSE' => array(self::BELONGS_TO, 'Classes', 'CLASSE_ID'),
			'cOURS' => array(self::BELONGS_TO, 'Cours', 'COURS_ID'),
			'eTABLISSEMENT' => array(self::BELONGS_TO, 'Etablissements', 'ETABLISSEMENT_ID'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'ESEIGNANT_ID' => 'Eseignant',
			'ANNEEACADEMIQUE_ID' => 'Anneeacademique',
			'CLASSE_ID' => 'Classe',
			'COURS_ID' => 'Cours',
			'ETABLISSEMENT_ID' => 'Etablissement',
			'ROLE' => 'Role',
			'enseigner_id' => 'Enseigner',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	 
	 public function sqlSearch(){
		$sql='SELECT enseigner_id, a.DATEDEB as var_DATEDEB, a.DATEFIN as var_DATEFIN, b.NOM as var_ETABLISSEMENT,
		d.NOM as var_CLASSE, e.NOM as var_COURS, f.NOM as var_NOMENSEIGNANT, f.PRENOM as var_PRENOMENSEIGNANT, c.ROLE  FROM enseigner c
		LEFT JOIN anneeacademiques a ON a.ANNEEACADEMIQUE_ID = c.ANNEEACADEMIQUE_ID
		LEFT JOIN etablissements b ON b.ETABLISSEMENT_ID = c.ETABLISSEMENT_ID
		LEFT JOIN classes d ON d.CLASSE_ID = c.CLASSE_ID
		LEFT JOIN cours e ON e.COURS_ID = c.COURS_ID
		LEFT JOIN enseignants f ON f.ESEIGNANT_ID = c.ESEIGNANT_ID';
		
		$count=Yii::app()->db->createCommand('SELECT COUNT(*) FROM enseigner')->queryScalar();
		
			return new CSqlDataProvider($sql, array(
					'keyField'=>'enseigner_id',
					'totalItemCount'=>$count,
					'sort'=>array(
							'attributes'=>array(
								'enseigner_id',
								'var_DATEDEB',
								'var_DATEFIN',
								'var_ETABLISSEMENT',
								'var_CLASSE',
								'var_COURS',
								'var_NOMENSEIGNANT',
								'var_PRENOMENSEIGNANT',
								'Role',
					 	),	
					),	
					'pagination'=>array(
							'pageSize'=>self::PAGER,
					),
			));
	}
	 
/*	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ESEIGNANT_ID',$this->ESEIGNANT_ID);
		$criteria->compare('ANNEEACADEMIQUE_ID',$this->ANNEEACADEMIQUE_ID);
		$criteria->compare('CLASSE_ID',$this->CLASSE_ID);
		$criteria->compare('COURS_ID',$this->COURS_ID);
		$criteria->compare('ETABLISSEMENT_ID',$this->ETABLISSEMENT_ID);
		$criteria->compare('ROLE',$this->ROLE,true);
		$criteria->compare('enseigner_id',$this->enseigner_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}*/
}