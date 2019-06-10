<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "slideshow".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property integer $created_by
 * @property string $created_on
 * @property integer $updated_by
 * @property string $updated_on
 */
class Slideshow extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slideshow';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            // [['image'], 'required'],
            [['created_by', 'updated_by'], 'integer'],
            [['created_on', 'updated_on'], 'safe'],
            [['title','sub_title', 'image'], 'string', 'max' => 255],
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
            'sub_title' => 'Sub Title',
            'image' => 'Image',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'updated_by' => 'Updated By',
            'updated_on' => 'Updated On',
        ];
    }
}
