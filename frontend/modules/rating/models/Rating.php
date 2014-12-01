<?php

namespace app\modules\rating\models;

use Yii;
use app\models\Lesson;
use app\models\Student;

/**
 * This is the model class for table "rating".
 *
 * @property integer $id
 * @property integer $student_id
 * @property integer $lesson_id
 * @property integer $rating
 *
 * @property Lesson $lesson
 * @property Student $student
 */
class Rating extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rating';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['rating'], 'integer'],
            [['student_id', 'lesson_id'], 'string']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'student_id' => 'Student',
            'lesson_id' => 'Lesson',
            'rating' => 'Rating',
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
    public function getStudent()
    {
        return $this->hasOne(Student::className(), ['id' => 'student_id']);
    }
}
