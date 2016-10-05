<?php

/**
 * This is the model class for table "{{Ads}}".
 *
 * The followings are the available columns in table '{{Ads}}':
 * @property integer $role_id
 * @property string $role_name
 * @property string $role_short_desc
 * @property string $role_creation_date
 * @property string $is_active
 */
class Roles extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName() {
		return 'tbl_roles';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules() {
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('role_name, role_short_desc', 'required'),
			array('role_id', 'numerical', 'integerOnly'=>true),
			array('role_name, role_short_desc', 'length', 'max'=>250),
			array('role_creation_date', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('role_name, role_short_desc, role_creation_date', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations() {
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'RoleAccesses' => array(self::HAS_MANY, 'Roleaccess', 'role_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels() {
		return array(
			'role_id' => 'Role #',
			'role_type' => 'Role Type',
			'role_name' => 'Role',
			'role_short_desc' => 'About Role',
			'role_creation_date' => 'Role Creation',
			'is_active' => 'Status',
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
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search() {
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.
		$criteria=new CDbCriteria;
		/*if(trim($this->role_perm_set_id) != '') {
			if(!is_numeric(trim($this->role_perm_set_id))) {
				$criteria->together = true;
				$criteria->with = array('RolePermission');
				$criteria->condition = "LCASE(RolePermission.perm_title) LIKE '".strtolower(trim($this->role_perm_set_id))."%'";
			} else {
				$criteria->condition = "role_perm_set_id = '".trim($this->role_perm_set_id)."'";
			}
		}
		if(trim($this->category_id) != '') {
			if(!is_numeric(trim($this->category_id))) {
				$criteria->together = true;
				$criteria->with = array('RoleCategory');
				$criteria->condition = "LCASE(RoleCategory.cat_title) LIKE '".strtolower(trim($this->category_id))."%'";
			} else {
				$criteria->condition = "category_id = '".trim($this->category_id)."'";
			}
		}*/
		$criteria->compare('role_id',$this->role_id);
		$criteria->compare('role_type',$this->role_type);
		$criteria->compare('role_name',$this->role_name,true);
		$criteria->compare('role_short_desc',$this->role_short_desc,true);
		$criteria->compare('role_creation_date',$this->role_creation_date);
		$criteria->compare('is_active',$this->is_active,true);
		return new CActiveDataProvider('Roles', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return Ads the static model class
	 */
	public static function model($className=__CLASS__) {
		return parent::model($className);
	}
}