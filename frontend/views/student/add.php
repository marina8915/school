<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\StudentAdd */
?>

<p>
<p>Add student:</p>
<div class="row">
    <div class="col-lg-5">
        <?php $form = ActiveForm::begin(['id' => 'form-studentAdd']); ?>
        <?= $form->field($model, 'name') ?>
        <?= $form->field($model, 'class_id') ?>
        <div class="form-group">
            <?= Html::submitButton('Save', ['class' => 'btn btn-primary', 'name' => 'studentAdd-button']) ?>
        </div>
        <?php ActiveForm::end(); ?>
    </div>
</div>

</p>
