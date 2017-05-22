<?php

namespace console\models;

use Yii;

/**
 * @author admin
 */
class Subscriber
{

    /**
     * Return all subscribers
     * @return array
     */
    public static function getList()
    {
        $sql = 'SELECT * FROM subscriber';
        return Yii::$app->db->createCommand($sql)->queryAll();
    }

}
