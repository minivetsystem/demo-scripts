<?php

/**
 * This is the model class for table "{{roleaccess}}".
 *
 * The followings are the available columns in table '{{roleaccess}}':
 * @property integer $rac_id
 * @property integer $role_id
 * @property integer $category_id
 * @property integer $permission_id
 */
class Roleaccess extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_roleaccess';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('role_id, category_id, permission_id', 'required'),
			array('role_id, category_id, permission_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('rac_id, role_id, category_id, permission_id', 'safe', 'on'=>'search'),
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
			'rac_id' => 'ACCESS #',
			'role_id' => 'Role',
			'category_id' => 'Category',
			'permission_id' => 'Permission',
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

		$criteria->compare('rac_id',$this->rac_id);
		$criteria->compare('role_id',$this->role_id);
		$criteria->compare('category_id',$this->category_id);
		$criteria->compare('permission_id',$this->permission_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Roleaccess the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
