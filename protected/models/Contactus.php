<?php

/**
 * This is the model class for table "contactus".
 *
 * The followings are the available columns in table 'contactus':
 * @property integer $id
 * @property string $adress1
 * @property string $title_adress1
 * @property double $longi_adress1
 * @property double $alti_adress1
 * @property string $adress2
 * @property string $title_adress2
 * @property double $longi_adress2
 * @property double $alti_adress2
 * @property string $adress3
 * @property string $title_adress3
 * @property double $longi_adress3
 * @property double $alti_adress3
 */
class Contactus extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'contactus';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id', 'numerical', 'integerOnly'=>true),
			array('longi_adress1, alti_adress1, longi_adress2, alti_adress2, longi_adress3, alti_adress3', 'numerical'),
			array('adress1, adress2, adress3', 'length', 'max'=>1000),
			array('title_adress1, title_adress2, title_adress3', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, adress1, title_adress1, longi_adress1, alti_adress1, adress2, title_adress2, longi_adress2, alti_adress2, adress3, title_adress3, longi_adress3, alti_adress3', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'adress1' => 'Adress1',
			'title_adress1' => 'Title Adress1',
			'longi_adress1' => 'Longi Adress1',
			'alti_adress1' => 'Alti Adress1',
			'adress2' => 'Adress2',
			'title_adress2' => 'Title Adress2',
			'longi_adress2' => 'Longi Adress2',
			'alti_adress2' => 'Alti Adress2',
			'adress3' => 'Adress3',
			'title_adress3' => 'Title Adress3',
			'longi_adress3' => 'Longi Adress3',
			'alti_adress3' => 'Alti Adress3',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('adress1',$this->adress1,true);
		$criteria->compare('title_adress1',$this->title_adress1,true);
		$criteria->compare('longi_adress1',$this->longi_adress1);
		$criteria->compare('alti_adress1',$this->alti_adress1);
		$criteria->compare('adress2',$this->adress2,true);
		$criteria->compare('title_adress2',$this->title_adress2,true);
		$criteria->compare('longi_adress2',$this->longi_adress2);
		$criteria->compare('alti_adress2',$this->alti_adress2);
		$criteria->compare('adress3',$this->adress3,true);
		$criteria->compare('title_adress3',$this->title_adress3,true);
		$criteria->compare('longi_adress3',$this->longi_adress3);
		$criteria->compare('alti_adress3',$this->alti_adress3);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Contactus the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
