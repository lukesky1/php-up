<?php

namespace frontend\controllers;

use yii\web\Controller;
use Yii;

/**
 * @author admin
 */
class DaoController extends Controller
{

    public function actionIndex()
    {
        $sql1 = 'DELETE FROM news WHERE id = 3;';
        $result1 = Yii::$app->db->createCommand($sql1)->execute();
        echo '<pre>';
        var_dump($result1);
        echo '<pre>';die;

        
        return $this->render('index');
    }

}
