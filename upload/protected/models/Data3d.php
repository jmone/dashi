<?php

/**
 * This is the model class for table "3d".
 *
 * The followings are the available columns in table '3d':
 * @property integer $number
 * @property integer $hundred
 * @property integer $ten
 * @property integer $one
 */
class Data3d extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Data3d the static model class
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
		return '3d';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('number, hundred, ten, one', 'required'),
			array('number, hundred, ten, one', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('number, hundred, ten, one', 'safe', 'on'=>'search'),
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
			'number' => '期号',
			'hundred' => '百位',
			'ten' => '十位',
			'one' => '个位',
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

		$criteria->compare('number',$this->number);
		$criteria->compare('hundred',$this->hundred);
		$criteria->compare('ten',$this->ten);
		$criteria->compare('one',$this->one);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}
