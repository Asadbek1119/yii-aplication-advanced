<?php

namespace app\modules\api\controllers;

use yii\rest\Controller;

class UserController extends Controller
{
    public function actionIndex()
    {
        return [
            'name' => 'Asadbek',
            'job' => "Programmer"
        ];
    }
}