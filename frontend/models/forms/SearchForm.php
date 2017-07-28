<?php

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\NewsSearch;

/**
 * Description of LoginForm
 *
 * @author admin
 */
class SearchForm extends Model
{

    public $keyword;

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
                ['keyword', 'trim'],
                ['keyword', 'required'],
                ['keyword', 'string', 'min' => 3],
        ];
    }
    
    public function search()
    {
        if ($this->validate()) {
            $model = new NewsSearch();
            return $model->simpleSearch($this->keyword);
        }
    }

}
