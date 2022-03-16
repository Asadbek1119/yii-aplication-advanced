<?php

namespace api\controllers;


class ProductsController extends MyController
{
    public $modelClass = 'common\models\Products';

//    public function actions()
//    {
//        $actions = parent::actions();
//        unset($actions['index']);
//        return $actions;
//    }
//
//    public function actionIndex()
//    {
//        $dataProvider = new ActiveDataProvider([
//           'query' =>  Products::find(),
//           'pagination' => [
//               'pageSize' => 3
//           ]
//        ]);
//        return [
//            'success' => true,
//            'message' => 'Mahsulotlar',
//            'data' => $dataProvider
//        ];
//    }

}