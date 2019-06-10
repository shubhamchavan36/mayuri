<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property integer $id
 * @property string $title
 * @property string $image
 * @property string $description
 * @property integer $created_by
 * @property string $created_on
 * @property string $updated_on
 * @property integer $updated_by
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title',  'description', 'price', 'size', 'stock_availability', 'colors'], 'required'],
            // [['image'],'required','on' => 'create'],
            [['description'], 'string'],
             [['size'], 'string'],
             [['price'], 'integer'],
            // [['weight'], 'string'],
             [['stock_availability'], 'string'],
             [['colors'], 'string'],
            [['created_by', 'updated_by'], 'integer'],
            [['created_on', 'updated_on'], 'safe'],
            [['title', 'image'], 'string', 'max' => 255],
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
            'image' => 'Image',
            'description' => 'Description',
            'size'=>'Size',
            'price'=>'Price',
            'weight'=>'Weight',
            'stock_availability'=>'stock availability',
            'colors'=>'Colors',
            'created_by' => 'Created By',
            'created_on' => 'Created On',
            'updated_on' => 'Updated On',
            'updated_by' => 'Updated By',
        ];
    }
}
