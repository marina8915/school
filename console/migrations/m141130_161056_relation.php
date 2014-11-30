<?php

use yii\db\Schema;
use yii\db\Migration;

class m141130_161056_relation extends Migration
{
    public function up()
    {   
       $tableOptions = null;

       $this->createTable('{{%classes_lesson}}', [
            'class_id' => Schema::TYPE_INTEGER,
            'lesson_id' => Schema::TYPE_INTEGER,
       ], $tableOptions);


       $this->createIndex('FK_classes_lesson', '{{%classes_lesson}}', 'class_id');
       $this->addForeignKey('FK_classes_lesson', '{{%classes_lesson}}', 'class_id', '{{%classes}}', 'id', 'SET NULL', 'CASCADE');

       $this->createIndex('FK_lesson_classes', '{{%classes_lesson}}', 'lesson_id');
       $this->addForeignKey('FK_lesson_classes', '{{%classes_lesson}}', 'lesson_id', '{{%lesson}}', 'id', 'SET NULL', 'CASCADE');
    }

    public function down()
    {
         $this->dropTable('{{%classes_lesson}}');

        return false;
    }
}
