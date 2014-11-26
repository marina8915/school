<?php

use yii\db\Schema;
use yii\db\Migration;

class m141126_090052_tables_classes_lessons_student extends Migration
{
    public function up()
    {
        $tableOptions = null;

        $this->createTable('{{%classes}}', [
            'id' => Schema::TYPE_PK,
            'letter' => Schema::TYPE_STRING,
            'school_id' => Schema::TYPE_INTEGER,
            'num_class' => Schema::TYPE_INTEGER,
        ], $tableOptions);
        $this->createTable('{{%lessons}}', [
            'id' => Schema::TYPE_PK,
            'class_id' => Schema::TYPE_INTEGER,
            'title' => Schema::TYPE_STRING,
        ], $tableOptions);
        $this->createTable('{{%student}}', [
            'id' => Schema::TYPE_PK,
            'class_id' => Schema::TYPE_INTEGER,
            'name' => Schema::TYPE_STRING,
        ], $tableOptions);

    }

    public function safeDown()
    {
        $this->dropTable('{{%classes}}');
        $this->dropTable('{{%lessons}}');
        $this->dropTable('{{%student}}');
    }
}
