<?php

/**
 * This is the model class for table "{{permissions}}".
 *
 * The followings are the available columns in table '{{permissions}}':
 * @property integer $perm_id
 * @property string $perm_title
 * @property string $CAN_ADD_BIODATA
 * @property string $CAN_LIST_BIODATA
 * @property string $CAN_EDIT_BIODATA
 * @property string $CAN_ADD_UPDATELIST
 * @property string $CAN_LIST_UPDATELIST
 * @property string $CAN_EDIT_UPDATELIST
 * @property string $is_active
 */
class Permissions extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_permissions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('perm_title', 'required'),
			array('perm_title', 'length', 'max'=>250),
			array('CAN_CREATE, CAN_READ, CAN_UPDATE, CAN_DELETE, is_active', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('perm_id, perm_title, CAN_CREATE, CAN_READ, CAN_UPDATE, CAN_DELETE, is_active', 'safe', 'on'=>'search'),
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
			'CategoryOwner'=>array(self::BELONGS_TO, 'Users', 'id'),
			'CategoryParent' => array(self::BELONGS_TO, 'Category', 'cat_parent_id'),
			'CategoryChilds' => array(self::HAS_MANY, 'Category', 'cat_parent_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'perm_id' => 'Perm #',
			'perm_title' => 'Permission Title',
			'CAN_CREATE' => 'Can Create',
			'CAN_READ' => 'Can Read',
			'CAN_UPDATE' => 'Can Update',
			'CAN_DELETE' => 'Can Delete',
			'is_active' => 'Is Active',
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

		$criteria->compare('perm_id',$this->perm_id);
		$criteria->compare('perm_title',$this->perm_title,true);
		$criteria->compare('CAN_CREATE',$this->CAN_CREATE,true);
		$criteria->compare('CAN_READ',$this->CAN_READ,true);
		$criteria->compare('CAN_UPDATE',$this->CAN_UPDATE,true);
		$criteria->compare('CAN_DELETE',$this->CAN_DELETE,true);
		$criteria->compare('is_active',$this->is_active,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Permissions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
