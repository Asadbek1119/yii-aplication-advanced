<?php

namespace api\models;

class Products extends \common\models\Products
{
    public function fields()
    {
        return [
            'id',
            'name',
            'category_name'
        ];
    }
}