<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "seo".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property string $updated_on
 * @property integer $updated_by
 */
class Seo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'seo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description'], 'string'],
            [['updated_on'], 'safe'],
            [['updated_by'], 'integer'],
            [['title'], 'string', 'max' => 100],
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
            'description' => 'Description',
            'updated_on' => 'Updated On',
            'updated_by' => 'Updated By',
        ];
    }
}
