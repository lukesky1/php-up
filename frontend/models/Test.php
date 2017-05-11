<?php

namespace frontend\models;

use Yii;

/**
 * 
 */
class Test
{
    
    /**
     * @param integer $max
     * @return array
     */
    public static function getNewsList($max)
    {
        $max = intval($max);
        $sql = 'SELECT * FROM news LIMIT '.$max;
        
        $result = Yii::$app->db->createCommand($sql)->queryAll();
        
        if (!empty($result) && is_array($result)) {        
            foreach ($result as &$item) {
                $item['content'] = Yii::$app->stringHelper->getShort($item['content']);
            }
        }
        
        return $result;        
    }
    
    /**
     * @param integer $id
     * @return array|false
     */
    public static function getItem($id)
    {
        $id = intval($id);
        $sql = "SELECT * FROM news WHERE id = $id";
        
        return Yii::$app->db->createCommand($sql)->queryOne();
    }
    
    
}