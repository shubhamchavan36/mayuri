<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "why_us".
 *
 * @property integer $id
 * @property string $title
 * @property string $description
 * @property integer $created_by
 * @property string $created_on
 * @property integer $updated_by
 * @property string $updated_on
 */
class WhyUs extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'why_us';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'description'], 'required'],
            [['description'], 'string'],
            [['created_by', 'updated_by'], 'integer'],
            [['created_on', 'updated_on'], 'safe'],
            [['title'], 'string', 'max' => 255],
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
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'updated_by' => 'Updated By',
            'updated_on' => 'Updated On',
        ];
    }
}
