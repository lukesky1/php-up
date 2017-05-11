<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\Test;

class TestController extends Controller
{
    public function actionIndex()
    {
        
        $max = Yii::$app->params['maxNewsInList'];
        
        $list = Test::getNewsList($max);
                
        return $this->render('index', [
            'list' => $list,
        ]);
    }
    
    public function actionView($id)
    {
        $item = Test::getItem($id);

        return $this->render('view', [
            'item' => $item 
        ]);
    }    

    public function actionMail()
    {
        $result = Yii::$app->mailer->compose()
                ->setFrom('test.php.up@gmail.com')
                ->setTo('test.php.up@gmail.com')
                ->setSubject('Тема сообщения')
                ->setTextBody('Текст сообщения')
                ->setHtmlBody('<b>текст сообщения в формате HTML</b>')
                ->send();

        var_dump($result);
        die;
    }

}