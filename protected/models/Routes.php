<?php

/**
 * This is the model class for table "routes".
 *
 * The followings are the available columns in table 'routes':
 * @property integer $id
 * @property string $line
 * @property string $source
 * @property string $destination
 * @property string $distance
 * @property string $travel_time
 * @property string $other_info
 * @property integer $fare_id
 * @property string $active
 *
 * The followings are the available model relations:
 * @property Fare $fare
 * @property Tickets[] $tickets
 */
class Routes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'routes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('line, source, destination, distance, travel_time, other_info, fare_id', 'required'),
			array('fare_id', 'numerical', 'integerOnly'=>true),
			array('line, source, destination, distance, travel_time', 'length', 'max'=>255),
			array('active', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, line, source, destination, distance, travel_time, other_info, fare_id, active', 'safe', 'on'=>'search'),
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
			'fare' => array(self::BELONGS_TO, 'Fare', 'fare_id'),
			'tickets' => array(self::HAS_MANY, 'Tickets', 'route_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'line' => 'Line',
			'source' => 'Source',
			'destination' => 'Destination',
			'distance' => 'Distance',
			'travel_time' => 'Travel Time',
			'other_info' => 'Other Info',
			'fare_id' => 'Fare',
			'active' => 'Active',
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
		$criteria->compare('line',$this->line,true);
		$criteria->compare('source',$this->source,true);
		$criteria->compare('destination',$this->destination,true);
		$criteria->compare('distance',$this->distance,true);
		$criteria->compare('travel_time',$this->travel_time,true);
		$criteria->compare('other_info',$this->other_info,true);
		$criteria->compare('fare_id',$this->fare_id);
		$criteria->compare('active',$this->active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Routes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
