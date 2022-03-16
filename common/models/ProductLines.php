<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "product_lines".
 *
 * @property int $id
 * @property string $name
 * @property string $category
 * @property string $description
 */
class ProductLines extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'product_lines';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name', 'category', 'description'], 'required'],
            [['description'], 'string'],
            [['name'], 'string', 'max' => 100],
            [['category'], 'string', 'max' => 50],
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
            'category' => Yii::t('app', 'Category'),
            'description' => Yii::t('app', 'Description'),
        ];
    }
}
