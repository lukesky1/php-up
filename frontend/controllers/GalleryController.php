<?php

namespace frontend\controllers;

use yii\web\Controller;

/**
 * @author admin
 */
class GalleryController extends Controller
{

    public function actionIndex()
    {
        return $this->render('index');
    }

}
