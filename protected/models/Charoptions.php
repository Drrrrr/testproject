<?php

/**
 * This is the model class for table "charoptions".
 *
 * The followings are the available columns in table 'charoptions':
 * @property integer $charoption_id
 * @property integer $option_id
 * @property integer $points
 * @property integer $char_id
 */
class Charoptions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'charoptions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('charoption_id, option_id, points, char_id', 'required'),
			array('charoption_id, option_id, points, char_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('charoption_id, option_id, points, char_id', 'safe', 'on'=>'search'),
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
			'option' => array(self::BELONGS_TO, "Options", "option_id"),
			'characteristic' => array(self::HAS_ONE, "Characteristics", "char_id")
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'charoption_id' => 'Charoption',
			'option_id' => 'Option',
			'points' => 'Points',
			'char_id' => 'Char',
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

		$criteria->compare('charoption_id',$this->charoption_id);
		$criteria->compare('option_id',$this->option_id);
		$criteria->compare('points',$this->points);
		$criteria->compare('char_id',$this->char_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Charoptions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
