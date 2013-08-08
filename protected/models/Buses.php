<?php

/**
 * This is the model class for table "buses".
 *
 * The followings are the available columns in table 'buses':
 * @property integer $id
 * @property string $name
 * @property integer $seats
 * @property string $number
 * @property string $bus_info
 * @property string $driver
 * @property string $driver_phone
 *
 * The followings are the available model relations:
 * @property Schedules[] $schedules
 * @property Tickets[] $tickets
 */
class Buses extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'buses';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, seats, number, bus_info, driver_phone', 'required'),
			array('seats', 'numerical', 'integerOnly'=>true),
			array('name, number, driver, driver_phone', 'length', 'max'=>255),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, seats, number, bus_info, driver, driver_phone', 'safe', 'on'=>'search'),
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
			'schedules' => array(self::HAS_MANY, 'Schedules', 'bus_id'),
			'tickets' => array(self::HAS_MANY, 'Tickets', 'bus_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Name',
			'seats' => 'Seats',
			'number' => 'Number',
			'bus_info' => 'Bus Info',
			'driver' => 'Driver',
			'driver_phone' => 'Driver Phone',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('seats',$this->seats);
		$criteria->compare('number',$this->number,true);
		$criteria->compare('bus_info',$this->bus_info,true);
		$criteria->compare('driver',$this->driver,true);
		$criteria->compare('driver_phone',$this->driver_phone,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Buses the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
