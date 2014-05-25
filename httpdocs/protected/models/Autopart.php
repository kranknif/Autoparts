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
 * @property Parttype $parttype
 */
class Autopart extends CActiveRecord
{
    public $price_min = null;
    public $price_max = null;
    public $parttype_name = null;
    public $car_model = null;
    public $producer_name = null;

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
            array('parttype_id, car_id, quantity, producer_id, price', 'numerical', 'integerOnly' => true),
            array('name, description', 'length', 'max' => 100),
            array ('price, quantity','numerical', 'min' => 0 ),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('autopart_id, name, quantity, producer_name, description, price, price_min, price_max, parttype_name, car_model', 'safe', 'on' => 'search'),
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
            'parttype' => array(self::BELONGS_TO, 'Parttype', 'parttype_id'),
            'car' => array(self::BELONGS_TO, 'Car', 'car_id'),
            'producer' => array(self::BELONGS_TO, 'Producer', 'producer_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'autopart_id' => 'Autopart id',
            'parttype_name' => 'Parttype name',
            'car_model' => 'Car model',
            'name' => 'Name',
            'quantity' => 'Quantity',
            'producer_name' => 'Producer name',
            'description' => 'Description',
            'price' => 'Price',
            'price_min' => 'Price min',
            'price_max' => 'Price max',
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

        $criteria = new CDbCriteria;

        $criteria->with = array('parttype', 'car', 'producer');

        $criteria->compare('autopart_id', $this->autopart_id);
        $criteria->compare('parttype.name', $this->parttype_name, true);
        $criteria->compare('car.model', $this->car_model, true);
        $criteria->compare('t.name', $this->name, true);
        $criteria->compare('quantity', $this->quantity);
        $criteria->compare('producer.name', $this->producer_name, true);
        $criteria->compare('description', $this->description, true);
        $criteria->compare('price', $this->price);

        if (isset($this->price_min) && !empty($this->price_min))
            $criteria->addCondition('price >= ' . $this->price_min);

        if (isset($this->price_min) && !empty($this->price_max))
            $criteria->addCondition('price <= ' . $this->price_max);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Autopart the static model class
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }
}
