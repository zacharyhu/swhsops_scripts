<?php

/**
 * This is the model class for table "gp_recharge_cp".
 *
 * The followings are the available columns in table 'gp_recharge_cp':
 * @property integer $id
 * @property string $l_name
 * @property string $l_type
 */
class GpCp extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GpCp the static model class
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
		return 'gp_recharge_cp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('l_name, l_type', 'required'),
			array('l_name', 'length', 'max'=>10),
			array('l_type', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, l_name, l_type', 'safe', 'on'=>'search'),
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
			'l_name' => 'cp名',
			'l_type' => 'cpid',
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
		$criteria->compare('l_name',$this->l_name,true);
		$criteria->compare('l_type',$this->l_type,true);

		return new CActiveDataProvider($this, array(
				'pagination'=>array(
						'pageSize'=>20,//设置每页显示20条
				),
				'sort'=>array(
						'defaultOrder'=>'l_type', //设置默认排序是createTime倒序
				),
			'criteria'=>$criteria,
		));
	}
	//获取l_type列表
	public function getCpList()
	{
		$cpList = GpCp::model()->findAll();
		return CHtml::listData($cpList, 'l_type','l_name' );
	}
	//获取l_type_name
	public function getCpName($l_type)
	{
		$cpNameArr = GpCp::model()->findByAttributes(array('l_type'=>$l_type));
		return $cpNameArr->l_name;
	}
}