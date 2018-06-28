<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "worklist".
 *
 * @property int $id
 * @property int $user_id
 * @property string $date
 * @property string $start_time
 * @property string $end_time
 * @property string $title
 * @property string $description
 * @property string $work_status
 * @property string $status
 * @property string $created_at
 * @property string $updated_at
 *
 * @property UserMaster $user
 */
class Worklist extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'worklist';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['date', 'start_time', 'end_time', 'title'], 'required', 'on'=>'create'],
            [['date'],'date', 'format'=>'yyyy-m-d', 'on'=>'create'],
            ['end_time','time_validation_check', 'on'=>'create'],
            [['date', 'start_time', 'end_time', 'title', 'description'], 'safe', 'on'=>'create'],
            [['description', 'work_status', 'status'], 'string'],
            [['title'], 'string', 'max' => 255],
        ];
    }

    public function time_validation_check($attribute, $params){
        if($this->start_time.":00" >= $this->$attribute.":00"){
            $this->addError($attribute,'End time must be grater than start time');
        }

    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'date' => 'Date',
            'start_time' => 'Start Time',
            'end_time' => 'End Time',
            'title' => 'Title',
            'description' => 'Description',
            'work_status' => 'Work Status',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
