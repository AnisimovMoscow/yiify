<?php

namespace app\models;

use yii\db\ActiveRecord;

class Page extends ActiveRecord
{
    public static function tableName()
    {
        return 'page';
    }

    public function rules()
    {
        return [
            [['name', 'title', 'text'], 'required'],
            [['text'], 'string'],
            [['name'], 'string', 'max' => 50],
            [['title'], 'string', 'max' => 255],
            [['name'], 'unique']
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Идентификатор',
            'title' => 'Заголовок',
            'text' => 'Текст',
        ];
    }
}
