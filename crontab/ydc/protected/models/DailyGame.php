<?php

/**
 * This is the model class for table "gp_data_daily_game".
 *
 * The followings are the available columns in table 'gp_data_daily_game':
 * @property integer $id
 * @property string $l_date
 * @property integer $l_game_id
 * @property string $l_game_name
 * @property string $l_total_num
 * @property integer $l_user_num
 * @property string $l_avg_num
 * @property integer $l_game_points
 * @property integer $l_cash_sum
 */
class DailyGame extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return DailyGame the static model class
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
		return 'gp_data_daily_game';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('l_date, l_game_id, l_game_name, l_total_num, l_user_num, l_avg_num, l_game_points,l_source', 'required'),
			array('l_game_id, l_user_num, l_game_points, l_cash_sum,l_source', 'numerical', 'integerOnly'=>true),
			array('l_date, l_total_num, l_avg_num,l_source', 'length', 'max'=>10),
			array('l_game_name', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('l_date, l_game_id, l_game_name, l_total_num, l_user_num, l_avg_num, l_game_points,l_source', 'safe', 'on'=>'search'),
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
			'l_game_id' => '游戏id',
			'l_game_name' => '游戏名',
			'l_total_num' => '总人次',
			'l_user_num' => '总人数',
			'l_avg_num' => '人均次数',
			'l_game_points' => '游戏点变更',
			'l_cash_sum' => '充值金额',
		    'l_source' => '来源(105新疆201老平台)',
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
		$criteria->compare('l_date',$this->l_date,true);
		$criteria->compare('l_game_id',$this->l_game_id);
		$criteria->compare('l_game_name',$this->l_game_name,true);
		$criteria->compare('l_total_num',$this->l_total_num,true);
		$criteria->compare('l_user_num',$this->l_user_num);
		$criteria->compare('l_avg_num',$this->l_avg_num,true);
		$criteria->compare('l_game_points',$this->l_game_points);
		$criteria->compare('l_cash_sum',$this->l_cash_sum);
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
	public function getGameNameList()
	{

		$gameListArr = DailyGame::model()->findAll(
		         //取游戏名的唯一值
		         array(
		             'select'=>'t.l_game_id,t.l_game_name',
		             'group'=>'t.l_game_name',
		             'distinct'=>TRUE,
		         )
		 );
		 //关联数据值，如果不同将会找不到结果
		return CHtml::listData($gameListArr,'l_game_name','l_game_name' );
	}
	/*
	public function getGameName($l_game_id)
	{
	    $gameNameArr = DailyGame::model()->findByAttributes(array('l_game_id'=>$l_game_id));
	    return $gameNameArr->$l_game_name;
	}*/
}