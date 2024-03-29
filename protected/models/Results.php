<?php

/**
 * This is the model class for table "results".
 *
 * The followings are the available columns in table 'results':
 * @property integer $result_id
 * @property integer $test_id
 * @property integer $char_id
 * @property string $description
 */
class Results extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'results';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('result_id, test_id, char_id, description', 'required'),
			array('result_id, test_id, char_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('result_id, test_id, char_id, description', 'safe', 'on'=>'search'),
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
			'test' => array(self::BELONGS_TO, 'Tests', 'test_id'),
			'characteristic' => array(self::HAS_ONE, "Characteristics", 'char_id')
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'result_id' => 'Result',
			'test_id' => 'Test',
			'char_id' => 'Char',
			'description' => 'Description',
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

		$criteria->compare('result_id',$this->result_id);
		$criteria->compare('test_id',$this->test_id);
		$criteria->compare('char_id',$this->char_id);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Results the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
