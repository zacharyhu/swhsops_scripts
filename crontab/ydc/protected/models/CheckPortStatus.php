<?php

/**
 * This is the model class for table "monitor_check_port_status".
 *
 * The followings are the available columns in table 'monitor_check_port_status':
 * @property integer $id
 * @property integer $item_id
 * @property string $item_name
 * @property integer $check_status
 * @property string $check_last_time
 * @property integer $failed_times
 */
class CheckPortStatus extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CheckPortStatus the static model class
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
		return 'monitor_check_port_status';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_id, item_name, check_status, check_last_time, failed_times', 'required'),
			array('item_id, check_status, failed_times', 'numerical', 'integerOnly'=>true),
			array('item_name', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, item_id, item_name, check_status, check_last_time, failed_times', 'safe', 'on'=>'search'),
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
			'item_id' => '监控项ID',
			'item_name' => '对应游戏名',
			'check_status' => '端口存活状态',
			'check_last_time' => '最后更新时间',
			'failed_times' => '失败次数',
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
		$criteria->compare('item_id',$this->item_id);
		$criteria->compare('item_name',$this->item_name,true);
		$criteria->compare('check_status',$this->check_status);
		$criteria->compare('check_last_time',$this->check_last_time,true);
		$criteria->compare('failed_times',$this->failed_times);

		return new CActiveDataProvider($this, array(
				'pagination'=>array(
						'pageSize'=>30,//设置每页显示30条
				),
				'sort'=>array(
						'defaultOrder'=>'check_status,failed_times desc', //设置默认排序是createTime倒序
				),
			'criteria'=>$criteria,
		));
	}
}