<?php

use yii\db\Schema;
use yii\db\Migration;

class m141022_140953_create_page_table extends Migration
{
    public function up()
    {
        $this->createTable('page', [
            'id' => 'pk',
            'name' => Schema::TYPE_STRING,
            'title' => Schema::TYPE_STRING,
            'text' => Schema::TYPE_TEXT
        ]);
    }

    public function down()
    {
        $this->dropTable('page');
    }
}
