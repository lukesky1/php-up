<?php

namespace frontend\widgets\newsList;

use Yii;
use yii\base\Widget;
use frontend\models\Test;

/**
 * @author admin
 */
class NewsList extends Widget
{
    
    public $showLimit = null;
    
    public function run()
    {
        $max = Yii::$app->params['maxNewsInList'];       
        if ($this->showLimit) {
            $max = $this->showLimit;
        }
        
        $list = Test::getNewsList($max);
                
        return $this->render('block', [
            'list' => $list,
        ]);
    }
}
