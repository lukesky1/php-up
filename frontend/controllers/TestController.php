<?php

namespace frontend\controllers;

use Yii;
use Faker\Factory;
use yii\web\Controller;

class TestController extends Controller
{
    
    public function actionGenerate()
    {
        ini_set('max_execution_time', 10000);
        
        /* @var $faker Faker\Generator */
        $faker = Factory::create();
        
        for ($j = 0; $j < 500; $j++) {
            
            $news = [];
            for ($i = 0; $i < 100; $i++) {
                $news[] = [$faker->text(35), $faker->text(rand(1000, 2000)), rand(0, 1)];
            }
            Yii::$app->db->createCommand()->batchInsert('news', ['title', 'content', 'status'], $news)->execute();
            unset($news);
            
        }

        return $this->render('generate');
    }

    public function actionSend()
    {
        if (!Yii::$app->user->isGuest) {
            if (Yii::$app->request->isPost) {
                $receiver = Yii::$app->request->post('receiver');
                $amount = Yii::$app->request->post('amount');
                // Logic
                echo "$amount$ sent to user $receiver";
                die;
            }
            return $this->render('send');
        }
        return $this->goHome();
    }
}