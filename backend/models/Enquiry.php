<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "enquiry".
 *
 * @property integer $id
 * @property string $name
 * @property double $mobile_no
 * @property string $email
 * @property string $message
 * @property string $enquired_on
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
            [['name', 'email', 'message', 'enquired_on'], 'required'],
            [['mobile_no'], 'number'],
            [['message'], 'string'],
            [['enquired_on'], 'safe'],
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
            'enquired_on' => 'Enquired On',
        ];
    }
}
