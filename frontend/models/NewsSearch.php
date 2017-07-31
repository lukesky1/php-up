<?php

namespace frontend\models;

use Yii;
use yii\helpers\ArrayHelper;

/**
 * Description of NewsSearch
 *
 * @author admin
 */
class NewsSearch
{
    
    public function simpleSearch($keyword)
    {
        // TODO: fix security issue (hometask)
        $sql = "SELECT * FROM news WHERE content LIKE '%$keyword%' LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    
    public function fulltextSearch($keyword)
    {
        // TODO: fix security issue (hometask)
        $sql = "SELECT * FROM news WHERE MATCH (content) AGAINST ('$keyword') LIMIT 20";
        return Yii::$app->db->createCommand($sql)->queryAll();
    }
    
    public function advancedSearch($keyword)
    {
        $sql = "SELECT * FROM idx_news_content WHERE MATCH('$keyword') OPTION ranker=WORDCOUNT";
        $data = Yii::$app->sphinx->createCommand($sql)->queryAll();
        
        $ids = ArrayHelper::map($data, 'id', 'id');
        $data = News::find()->where(['id' => $ids])->asArray()->all();
        $data = ArrayHelper::index($data, 'id');

        $result = [];
        foreach ($ids as $element) {
            $result[] = [
                'id' => $element,
                'title' => $data[$element]['title'],
                'content' => $data[$element]['content'],
            ];
        }
        
        return $result;
    }
}
