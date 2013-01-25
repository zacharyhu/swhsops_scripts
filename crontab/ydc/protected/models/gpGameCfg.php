<?php

/**
 * This is the model class for table "gp_gameid_cfg".
 *
 * The followings are the available columns in table 'gp_gameid_cfg':
 * @property integer $id
 * @property integer $l_game_id
 * @property string $l_game_name
 * @property string $l_game_desc
 * @property string $l_game_spcode
 */
class gpGameCfg extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return gpGameCfg the static model class
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
		return 'gp_gameid_cfg';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('l_game_id, l_game_name, l_game_desc', 'required'),
			array('l_game_id', 'numerical', 'integerOnly'=>true),
			array('l_game_name', 'length', 'max'=>20),
			array('l_game_desc', 'length', 'max'=>50),
			array('l_game_spcode', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, l_game_id, l_game_name, l_game_desc, l_game_spcode', 'safe', 'on'=>'search'),
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
			'l_game_id' => 'L Game',
			'l_game_name' => 'L Game Name',
			'l_game_desc' => 'L Game Desc',
			'l_game_spcode' => 'L Game Spcode',
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
		$criteria->compare('l_game_id',$this->l_game_id);
		$criteria->compare('l_game_name',$this->l_game_name,true);
		$criteria->compare('l_game_desc',$this->l_game_desc,true);
		$criteria->compare('l_game_spcode',$this->l_game_spcode,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
}