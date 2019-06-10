<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "social_media".
 *
 * @property integer $id
 * @property string $title
 * @property string $logo
 * @property string $alt
 * @property string $url
 */
class SocialMedia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'social_media';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'alt', 'url'], 'required'],
            [['title', 'logo','alt', 'url'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'logo' => 'Logo',
            'alt' => 'Alt',
            'url' => 'Url',
        ];
    }
}
