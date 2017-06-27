<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Book;

class BookshopController extends \yii\web\Controller
{

    public function actionIndex()
    {
        $conditions = ['publisher_id' => 1];
        $bookList = Book::find()->where($conditions)->orderBy('date_published')->limit(2)->all();

        return $this->render('index', [
            'bookList' => $bookList,
        ]);
    }

    public function actionCreate()
    {
        $book = new Book();
        
        if ($book->load(Yii::$app->request->post()) && $book->save()) {
            Yii::$app->session->setFlash('success', 'Saved!');
            return $this->refresh();
        }
        
        return $this->render('create', [
            'book' => $book,
        ]);
    }

}
