<?php

/**
 * This is the model class for table "monitor_moniter_port_list".
 *
 * The followings are the available columns in table 'monitor_moniter_port_list':
 * @property integer $id
 * @property integer $item_id
 * @property string $item_name
 * @property string $item_host
 * @property integer $item_port
 */
class MoniterPortList extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MoniterPortList the static model class
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
		return 'monitor_moniter_port_list';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('item_id, item_name, item_host, item_port', 'required'),
			array('item_id, item_port', 'numerical', 'integerOnly'=>true),
			array('item_name, item_host', 'length', 'max'=>20),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, item_id, item_name, item_host, item_port', 'safe', 'on'=>'search'),
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
			'item_id' => 'Item',
			'item_name' => 'Item Name',
			'item_host' => 'Item Host',
			'item_port' => 'Item Port',
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
		$criteria->compare('item_host',$this->item_host,true);
		$criteria->compare('item_port',$this->item_port);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}