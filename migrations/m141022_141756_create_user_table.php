<?php

use yii\db\Schema;
use yii\db\Migration;

class m141022_141756_create_user_table extends Migration
{
    public function up()
    {
        $this->createTable('user', [
            'id' => 'pk',
            'username' => Schema::TYPE_STRING,
            'hash' => Schema::TYPE_STRING
        ]);
        $this->insert('user', [
            'username' => 'admin',
            'hash' => Yii::$app->getSecurity()->generatePasswordHash('admin')
        ]);
    }

    public function down()
    {
        $this->dropTable('user');
    }
}
