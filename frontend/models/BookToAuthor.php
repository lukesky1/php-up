<?php

namespace frontend\models;

/**
 * This is the model class for table "book_to_author".
 *
 * @property integer $id
 * @property integer $book_id
 * @property integer $author_id
 */
class BookToAuthor extends \yii\db\ActiveRecord
{

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{book_to_author}}';
    }

}
