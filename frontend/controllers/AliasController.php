<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class AliasController extends Controller
{

    public function actionExample()
    {
        echo Yii::getAlias('@photos');
    }

}
