<?php

/**
 * This is the model class for table "gp_recharge_his".
 *
 * The followings are the available columns in table 'gp_recharge_his':
 * @property string $vc_stb_id
 * @property string $member_id
 * @property integer $l_money
 * @property string $l_date
 * @property string $l_time
 * @property string $l_type
 */
class GpRechargeHis extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GpRechargeHis the static model class
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
		return 'gp_recharge_his';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vc_stb_id, member_id, l_money, l_date, l_time, l_type', 'required'),
			array('l_money', 'numerical', 'integerOnly'=>true),
			array('vc_stb_id', 'length', 'max'=>128),
			array('member_id', 'length', 'max'=>10),
			array('l_date, l_time', 'length', 'max'=>7),
			array('l_type,l_money', 'length', 'max'=>4),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('vc_stb_id, member_id, l_money, l_date, l_type', 'safe', 'on'=>'search'),
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
			'vc_stb_id' => '机顶盒号',
			'member_id' => '亿家游id',
			'l_money' => '充值金额',
			'l_date' => '日期',
			'l_time' => '时间',
			'l_type' => '充值类型',
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

		$criteria->compare('vc_stb_id',$this->vc_stb_id,true);
		$criteria->compare('member_id',$this->member_id,true);
		$criteria->compare('l_money',$this->l_money);
		$criteria->compare('l_date',$this->l_date,true);
		$criteria->compare('l_time',$this->l_time,true);
		$criteria->compare('l_type',$this->l_type,true);

		return new CActiveDataProvider($this, array(
				'sort'=>array(
						'defaultOrder'=>'l_date DESC,l_time desc', //设置默认排序是createTime倒序
				),
				'pagination'=>array(
						'pageSize'=>30,//设置每页显示30条
				),
			'criteria'=>$criteria,
		));
	}
}