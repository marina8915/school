<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use app\models\Student;
use app\models\Lesson;

/* @var $this yii\web\View */
/* @var $model app\modules\rating\models\Rating */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="rating-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'student_id')->textInput() ?>
    <?php $students = ArrayHelper::map(Student::find()->asArray()->all(), 'id', 'name') ?>
    <?= $form->field($model, 'student_id')->dropDownList($students)?>

    <?= $form->field($model, 'lesson_id')->textInput() ?>
    <?php $lessons = ArrayHelper::map(Lesson::find()->asArray()->all(), 'id', 'title') ?>
    <?= $form->field($model, 'lesson_id')->dropDownList($lessons)?>

    <?= $form->field($model, 'rating')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
