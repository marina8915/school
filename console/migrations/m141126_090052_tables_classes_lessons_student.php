<?php

use yii\db\Schema;
use yii\db\Migration;

class m141126_090052_tables_classes_lessons_student extends Migration
{
    public function up()
    {
        $tableOptions = null;

        $this->createTable('{{%lesson}}', [
            'id' => Schema::TYPE_PK,
            'class_id' => Schema::TYPE_INTEGER,
            'title' => Schema::TYPE_STRING,
        ], $tableOptions);
        $this->createTable('{{%student}}', [
            'id' => Schema::TYPE_PK,
            'class_id' => Schema::TYPE_INTEGER,
            'name' => Schema::TYPE_STRING,
        ], $tableOptions);
      $this->createTable('{{%classes}}', [
            'id' => Schema::TYPE_PK,
            'letter' => Schema::TYPE_STRING,
            'school_id' => Schema::TYPE_INTEGER,
            'num_class' => Schema::TYPE_INTEGER,
        ], $tableOptions);

       $this->createIndex('FK_student_class', '{{%student}}', 'class_id');
       $this->addForeignKey('FK_student_class', '{{%student}}', 'class_id', '{{%classes}}', 'id', 'SET NULL', 'CASCADE');

       $this->createIndex('FK_classs_school', '{{%classes}}', 'school_id');
       $this->addForeignKey('FK_classs_school', '{{%classes}}', 'school_id', '{{%school}}', 'id', 'SET NULL', 'CASCADE');
    }

    public function safeDown()
    {
        $this->dropTable('{{%lesson}}');
        $this->dropTable('{{%student}}');
        $this->dropTable('{{%classes}}');
    }
}
