<?php

/**
 * This is the model class for table "dailyreport_boss_cash".
 *
 * The followings are the available columns in table 'dailyreport_boss_cash':
 * @property string $l_date
 * @property integer $cash_sum
 * @property string $total_num
 * @property string $avg
 * @property integer $l_type
 */
class Cash extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cash the static model class
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
		return 'dailyreport_boss_cash';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('l_date, cash_sum, total_num, avg', 'required'),
			array('cash_sum, l_type', 'numerical', 'integerOnly'=>true),
			array('l_date, avg', 'length', 'max'=>10),
			array('total_num', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('l_date, cash_sum, total_num, avg, l_type', 'safe', 'on'=>'search'),
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
			'l_date' => 'L Date',
			'cash_sum' => 'Cash Sum',
			'total_num' => 'Total Num',
			'avg' => 'Avg',
			'l_type' => 'L Type',
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

		$criteria->compare('l_date',$this->l_date,true);
		$criteria->compare('cash_sum',$this->cash_sum);
		$criteria->compare('total_num',$this->total_num,true);
		$criteria->compare('avg',$this->avg,true);
		$criteria->compare('l_type',$this->l_type);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}