<?php

namespace frontend\controllers;

use yii\web\Controller;
use frontend\models\StudentAdd;
use Yii;

class StudentController extends Controller
{

    public function actionAdd()
    {
        $model = new StudentAdd();
        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $model->saveAdd();
            echo 'Data recorded';

        } else {
            return $this->render('add', ['model' => $model]);

        }
    }
}
