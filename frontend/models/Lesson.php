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
        return 'lessons';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['classes_id'], 'integer'],
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
            'classes_id' => 'Classes ID',
            'title' => 'Title'
        ];
    }
    /**
     * Declares a `many_many` relation.
     */
    public function getClasses()
    {
        return $this->hasMany(Classes::className(), ['id' => 'classes_id'])
            ->viaTable('authors_book', ['lesson_id' => 'id']);
    }
}