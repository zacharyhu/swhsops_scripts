<?php

/**
 * This is the model class for table "gp_game_source_cfg".
 *
 * The followings are the available columns in table 'gp_game_source_cfg':
 * @property integer $id
 * @property integer $l_source_id
 * @property string $l_source_name
 */
class GpGameSourceCfg extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GpGameSourceCfg the static model class
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
		return 'gp_game_source_cfg';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('l_source, l_source_name', 'required'),
			array('l_source', 'numerical', 'integerOnly'=>true),
			array('l_source_name', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, l_source, l_source_name', 'safe', 'on'=>'search'),
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
			'l_source' => '平台编号',
			'l_source_name' => '平台名称',
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
		$criteria->compare('l_source',$this->l_source);
		$criteria->compare('l_source_name',$this->l_source_name,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	public function getGpSourceList()
	{
		$gpSourceListArr = GpGameSourceCfg::model()->findAll();
		return CHtml::listData($gpSourceListArr, 'l_source', 'l_source_name');
	}
	public function getGpSourceName($l_source)
	{
		$gpSourceNameArr = GpGameSourceCfg::model()->findByAttributes(array('l_source'=>$l_source));
		return $gpSourceNameArr->l_source_name;
	}
}