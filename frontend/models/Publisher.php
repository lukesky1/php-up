<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "publisher".
 *
 * @property integer $id
 * @property string $name
 * @property string $date_registered
 * @property integer $identity_number
 */
class Publisher extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'publisher';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'date_registered' => 'Date Registered',
            'identity_number' => 'Identity Number',
        ];
    }
}
