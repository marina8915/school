<?php

use yii\db\Schema;
use yii\db\Migration;

class m141201_133607_rating extends Migration
{
    public function up()
    {$tableOptions = null;

        $this->createTable('{{%rating}}', [
            'id' => Schema::TYPE_PK,
            'student_id' => Schema::TYPE_INTEGER,
            'lesson_id' => Schema::TYPE_INTEGER,
            'rating' => Schema::TYPE_INTEGER,
        ], $tableOptions);

        $this->createIndex('FK_rating_student', '{{%rating}}', 'student_id');
        $this->addForeignKey('FK_rating_student', '{{%rating}}', 'student_id', '{{%student}}', 'id', 'SET NULL', 'CASCADE');

        $this->createIndex('FK_rating_lesson', '{{%rating}}', 'lesson_id');
        $this->addForeignKey('FK_rating_lesson', '{{%rating}}', 'lesson_id', '{{%lesson}}', 'id', 'SET NULL', 'CASCADE');
    }

    public function down()
    {
        $this->dropTable('{{%rating}}');
    }
}
