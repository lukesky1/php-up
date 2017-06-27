<?php

namespace frontend\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "book".
 *
 * @property integer $id
 * @property string $name
 * @property string $date_published
 * @property integer $publisher_id
 */
class Book extends ActiveRecord
{

    public static function tableName()
    {
        return '{{book}}';
    }
    
    public function rules()
    {
        return [
            [['name', 'publisher_id'], 'required'],
        ];
    }

    /**
     * @return string
     */
    public function getDatePublished()
    {
        return ($this->date_published) ? Yii::$app->formatter->asDate($this->date_published) : "Not set";
    }

    /**
     * @return Publisher|null
     */
    public function getPublisher()
    {
        return $this->hasOne(Publisher::className(), ['id' => 'publisher_id'])->one();
    }
    
    /**
     * @return string
     */
    public function getPublisherName()
    {
        if ($publisher = $this->getPublisher()) {
            return $publisher->name;
        }
        return "Not set";
    }

    /**
     * @return ActiveQuery
     */
    public function getBookToAuthorRelations()
    {
        return $this->hasMany(BookToAuthor::className(), ['book_id' => 'id']);
    }
    
    /**
     * @return Author[]
     */
    public function getAuthors()
    {
        return $this->hasMany(Author::className(), ['id' => 'author_id'])->via('bookToAuthorRelations')->all();
    }

}
