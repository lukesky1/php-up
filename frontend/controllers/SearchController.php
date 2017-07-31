<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\forms\SearchForm;

/**
 * @author admin
 */
class SearchController extends Controller
{

    public function actionIndex()
    {
        $model = new SearchForm();
        
        $results = null;
        
        if ($model->load(Yii::$app->request->post())) {
            $results = $model->search();
        }
        
        return $this->render('index', [
            'model' => $model,
            'results' => $results,
        ]);
    }
    
    public function actionAdvanced()
    {
        $model = new SearchForm();
        
        $results = null;
        
        if ($model->load(Yii::$app->request->post())) {
            $results = $model->searchAdvanced();
        }
        
        return $this->render('advanced', [
            'model' => $model,
            'results' => $results,
        ]);
    }

}
