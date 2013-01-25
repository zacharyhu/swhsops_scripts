<?php

/**
 * This is the model class for table "gp_data_daily_user".
 *
 * The followings are the available columns in table 'gp_data_daily_user':
 * @property integer $id
 * @property integer $l_date
 * @property integer $l_active
 * @property integer $l_new_num
 * @property integer $l_new_gamer
 * @property integer $l_source
 */
class dailyUser extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return dailyUser the static model class
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
		return 'gp_data_daily_user';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('l_date, l_active, l_new_num, l_new_gamer, l_source', 'required'),
			array('l_date, l_active, l_new_num, l_new_gamer, l_source', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, l_date, l_active, l_new_num, l_new_gamer, l_source', 'safe', 'on'=>'search'),
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
			'l_active' => '当天活跃人数',
			'l_new_num' => '新用户数',
			'l_new_gamer' => '新玩家数',
			'l_source' => '平台来源',
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
		$criteria->compare('l_active',$this->l_active);
		$criteria->compare('l_new_num',$this->l_new_num);
		$criteria->compare('l_new_gamer',$this->l_new_gamer);
		$criteria->compare('l_source',$this->l_source);

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