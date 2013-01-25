<?php

/**
 * This is the model class for table "gp_data_daily_vip".
 *
 * The followings are the available columns in table 'gp_data_daily_vip':
 * @property integer $id
 * @property integer $l_date
 * @property integer $l_mon_points
 * @property integer $l_mon_num
 * @property integer $l_coin_points
 * @property integer $l_coin_num
 * @property integer $l_ingame_num
 * @property integer $l_incash_num
 * @property integer $l_cash_sum
 */
class DailyVip extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DailyVip the static model class
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
		return 'gp_data_daily_vip';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('l_date, l_mon_points, l_mon_num, l_coin_points, l_coin_num, l_ingame_num, l_incash_num, l_cash_sum', 'required'),
			array('l_date, l_mon_points, l_mon_num, l_coin_points, l_coin_num, l_ingame_num, l_incash_num, l_cash_sum', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('l_date,l_ingame_num, l_incash_num, l_cash_sum', 'safe', 'on'=>'search'),
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
			'l_date' => '日期',
			'l_mon_points' => '领工资游戏点',
			'l_mon_num' => '包月领工资人数',
			'l_coin_points' => '接金币游戏点',
			'l_coin_num' => '接金币人数',
			'l_ingame_num' => '参与游戏会员数',
			'l_incash_num' => '参与充值会员数',
			'l_cash_sum' => '会员充值金额',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('l_date',$this->l_date);
		$criteria->compare('l_mon_points',$this->l_mon_points);
		$criteria->compare('l_mon_num',$this->l_mon_num);
		$criteria->compare('l_coin_points',$this->l_coin_points);
		$criteria->compare('l_coin_num',$this->l_coin_num);
		$criteria->compare('l_ingame_num',$this->l_ingame_num);
		$criteria->compare('l_incash_num',$this->l_incash_num);
		$criteria->compare('l_cash_sum',$this->l_cash_sum);

		return new CActiveDataProvider($this, array(
				'pagination'=>array(
						'pageSize'=>20,//设置每页显示20条
				),
				'sort'=>array(
						'defaultOrder'=>'l_date DESC', //设置默认排序是createTime倒序
				),
			'criteria'=>$criteria,
		));
	}
}