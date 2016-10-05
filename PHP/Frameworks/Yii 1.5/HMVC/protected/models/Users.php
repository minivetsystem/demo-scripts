<?php

/**
 * This is the model class for table "{{Users}}".
 *
 * The followings are the available columns in table '{{Users}}':
 * @property integer $id
 * @property string $username
 * @property string $password
 * @property string $email
 * @property string $role
 * @property string $full_name
 * @property string $profile_pic
 * @property string $active
 */
class Users extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('username, password, email, full_name, role_id', 'required'),
			array('username, email', 'length', 'max'=>128),
			array('email', 'email'),
			array('role_id', 'length', 'max'=>10),
			array('full_name', 'length', 'max'=>250),
			array('active', 'length', 'max'=>1),
			array('profile_pic', 'file', 'types'=>'jpg, gif, png', 'allowEmpty' => TRUE, 'maxSize' => 1024 * 1024 * 10,'tooLarge' => 'The file was larger than 10MB. Please upload a smaller file.', 'on' => 'insert'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			//array('password', 'length', 'min'=>6, 'max'=>64, 'on'=>'register, recover'),
			array('profile_pic', 'unsafe'),
			array('id, username, email, role_id, full_name, active', 'safe', 'on'=>'search'),
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
			'UserRole' => array(self::BELONGS_TO, 'Roles', 'role_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'username' => 'Username',
			'password' => 'Password',
			'email' => 'Email',
			'role_id' => 'Role',
			'full_name' => 'Full Name',
			'profile_pic' => 'Profile Pic',
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
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;
		$criteria->compare('id',$this->id);
		$criteria->compare('username',$this->username,true);
		//$criteria->compare('password',$this->password,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('role_id',$this->role_id,true);
		$criteria->compare('full_name',$this->full_name,true);
		//$criteria->compare('profile_pic',$this->profile_pic,true);
		$criteria->compare('active',$this->active,true);
		return new CActiveDataProvider('Users', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return User the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}