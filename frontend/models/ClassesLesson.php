<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "classes_lesson".
 *
 * @property integer $class_id
 * @property integer $lesson_id
 *
 * @property Lesson $lesson
 * @property Classes $class
 */
class ClassesLesson extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'classes_lesson';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id', 'lesson_id'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'class_id' => 'Class ID',
            'lesson_id' => 'Lesson ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLesson()
    {
        return $this->hasOne(Lesson::className(), ['id' => 'lesson_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getClass()
    {
        return $this->hasOne(Classes::className(), ['id' => 'class_id']);
    }
}
