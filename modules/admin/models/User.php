<?php

namespace app\modules\admin\models;

use Yii;
use yii\db\ActiveRecord;
use yii\web\IdentityInterface;

class User extends ActiveRecord implements IdentityInterface
{
    public $password;

    public static function tableName()
    {
        return 'user';
    }

    public function rules()
    {
        return [
            [['username'], 'required'],
            [['username'], 'string', 'max' => 50],
            [['username'], 'unique'],
            [['password'], 'required', 'on' => 'create'],
            [['password'], 'safe'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Логин',
            'password' => 'Пароль',
            'hash' => 'Хеш',
        ];
    }
    
    public function beforeSave($insert)
    {
        if (parent::beforeSave($insert)) {
            if (!empty($this->password)) {
                $this->hash = Yii::$app->getSecurity()->generatePasswordHash($this->password);
            }
            return true;
        } else {
            return false;
        }
    }
    
    public static function findIdentity($id)
    {
        return static::findOne($id);
    }
    
    public static function findIdentityByAccessToken($token, $type = null)
    {
        return null;
    }
    
    public function getId()
    {
        return $this->id;
    }
    
    public function getAuthKey()
    {
        return null;
    }
    
    public function validateAuthKey($authKey)
    {
        return false;
    }
    
    public function validatePassword($password)
    {
        return Yii::$app->getSecurity()->validatePassword($password, $this->hash);
    }
}
