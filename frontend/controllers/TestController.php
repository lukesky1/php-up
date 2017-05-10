<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\Test;

class TestController extends Controller
{
    public function actionIndex()
    {
        
        $list = Test::getNewsList();
                
        return $this->render('index', [
            'list' => $list,
        ]);
    }
}