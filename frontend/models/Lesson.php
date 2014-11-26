<?php

namespace app\models;


use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "lesson".
 *
 * @property integer $id
 * @property integer $classes_id
 * @property string $title

 */
class Lesson extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'lesson';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id'], 'integer'],
            [['title'], 'string' , 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'class_id' => 'Class ID',
            'title' => 'Title'
        ];
    }
    /**
     * Declares a `many_many` relation.
     */
    public function getClasses()
    {
        return $this->hasMany(Classes::className(), ['id' => 'class_id'])
            ->viaTable('class_lesson', ['lesson_id' => 'id']);
    }
}