<?php

namespace frontend\models;

/**
 * This is the model class for table "author".
 *
 * @property integer $id
 * @property string $first_name
 * @property string $last_name
 * @property string $birthdate
 * @property integer $rating
 */
class Author extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{author}}';
    }
    
    public function rules()
    {
        return [
            [['first_name', 'last_name'], 'required'],
            [['first_name', 'last_name'], 'string', 'max' => 125],
            [['birthdate'], 'date', 'format' => 'php:Y-m-d'],
            [['rating'], 'integer'],
        ];
    }
    
    public function beforeValidate()
    {
        $this->first_name = strip_tags($this->first_name);
        return parent::beforeValidate();
    }

        /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'birthdate' => 'Birthdate',
            'rating' => 'Rating',
        ];
    }

}
