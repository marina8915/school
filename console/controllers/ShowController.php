<?php

namespace console\controllers;

use yii\console\Controller;
use yii\helpers\Console;

class ShowController extends Controller
{
    public function actionIndex()
    {
     // Добавляєм запис в файл
     file_put_contents('console/hello.txt', "Hello World!\n", FILE_APPEND | LOCK_EX);
     //Виведення повідомлення в консоль
     $this->stdout('Done!' . PHP_EOL, Console::FG_GREEN);
    }
       
}

