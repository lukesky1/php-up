<?php

namespace frontend\models\example;

class ExampleValidation extends \yii\base\Model
{

    public $options;
    
    public function rules()
    {
        return [
            [['options'], 'required'],
            [['options'], 'each', 'rule' => ['integer']],
        ];
    }

}
