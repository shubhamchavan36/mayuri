<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "enquiry".
 *
 * @property integer $id
 * @property string $name
 * @property integer $mobile_no
 * @property string $email
 * @property string $subject
 * @property string $message
 */
class Enquiry extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'enquiry';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email'], 'required'],
            [['mobile_no'], 'integer'],
            [['message'], 'string'],
            [['name', 'email'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'mobile_no' => 'Mobile No',
            'email' => 'Email',
            'message' => 'Message',
        ];
    }
}
