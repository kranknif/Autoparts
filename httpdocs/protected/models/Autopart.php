<?php

/**
 * This is the model class for table "autopart".
 *
 * The followings are the available columns in table 'autopart':
 * @property integer $autopart_id
 * @property integer $parttype_id
 * @property integer $car_id
 * @property string $name
 * @property integer $quantity
 * @property integer $producer_id
 * @property string $description
 * @property integer $price
 */
class Autopart extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'autopart';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('parttype_id, car_id, name, quantity, producer_id, description, price', 'required'),
			array('parttype_id, car_id, quantity, producer_id, price', 'numerical', 'integerOnly'=>true),
			array('name, description', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('autopart_id, parttype_id, car_id, name, quantity, producer_id, description, price', 'safe', 'on'=>'search'),
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
			'autopart_id' => 'Autopart',
			'parttype_id' => 'Parttype',
			'car_id' => 'Car',
			'name' => 'Name',
			'quantity' => 'Quantity',
			'producer_id' => 'Producer',
			'description' => 'Description',
			'price' => 'Price',
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

		$criteria->compare('autopart_id',$this->autopart_id);
		$criteria->compare('parttype_id',$this->parttype_id);
		$criteria->compare('car_id',$this->car_id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('quantity',$this->quantity);
		$criteria->compare('producer_id',$this->producer_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('price',$this->price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Autopart the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
