<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "contactus".
 *
 * @property integer $id
 * @property string $email
 * @property integer $phone
 * @property string $address
 */
class Contactus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'contactus';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['email', 'phone', 'address'], 'required'],
            [['phone'], 'double'],
            [['address'], 'string'],
            [['email'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'phone' => 'Phone',
            'address' => 'Address',
        ];
    }
}
