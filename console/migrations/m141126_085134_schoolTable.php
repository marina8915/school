<?php

use yii\db\Schema;
use yii\db\Migration;

class m141126_085134_schoolTable extends Migration
{
    public function up()
    {$tableOptions = null;

        $this->createTable('{{%school}}', [
            'id' => Schema::TYPE_PK,
            'class_id' => Schema::TYPE_INTEGER,
            'num' => Schema::TYPE_INTEGER,
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable('{{%school}}');
    }
}
