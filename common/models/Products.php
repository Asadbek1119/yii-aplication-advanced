<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "products".
 *
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $category_name
 */
class Products extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'products';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'description', 'category_name'], 'required'],
            [['name', 'description', 'category_name'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'name' => Yii::t('app', 'Name'),
            'description' => Yii::t('app', 'Description'),
            'category_name' => Yii::t('app', 'Category Name'),
        ];
    }
}
