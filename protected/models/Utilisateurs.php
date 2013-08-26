<?php

/**
 * This is the model class for table "utilisateurs".
 *
 * The followings are the available columns in table 'utilisateurs':
 * @property integer $utilisateur_id
 * @property string $login
 * @property string $password
 * @property string $nom
 * @property string $prenom
 * @property string $telephone
 * @property string $portable
 * @property string $fonction
 */
class Utilisateurs extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Utilisateurs the static model class
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
		return 'utilisateurs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login, password, nom, prenom, telephone, portable, fonction', 'required'),
			array('login, password, nom, prenom, telephone, portable, fonction', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('utilisateur_id, login, password, nom, prenom, telephone, portable, fonction', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'utilisateur_id' => 'Utilisateur',
			'login' => 'Login',
			'password' => 'Password',
			'nom' => 'Nom',
			'prenom' => 'Prenom',
			'telephone' => 'Telephone',
			'portable' => 'Portable',
			'fonction' => 'Fonction',
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

		$criteria->compare('utilisateur_id',$this->utilisateur_id);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('nom',$this->nom,true);
		$criteria->compare('prenom',$this->prenom,true);
		$criteria->compare('telephone',$this->telephone,true);
		$criteria->compare('portable',$this->portable,true);
		$criteria->compare('fonction',$this->fonction,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}