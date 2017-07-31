<?php

namespace frontend\models\forms;

use yii\base\Model;
use frontend\models\NewsSearch;

/**
 * Description of SearchForm
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
            return $model->fulltextSearch($this->keyword);
        }
    }
    
    public function searchAdvanced()
    {
        if ($this->validate()) {
            $model = new NewsSearch();
            return $model->advancedSearch($this->keyword);
        }
    }

}
