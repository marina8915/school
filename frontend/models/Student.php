<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property integer $class_id
 * @property string $name
 */

class Student extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'student';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name'], 'string' , 'max' => 255],
            [['class_id'], 'integer']
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
            'name' => 'Name'
        ];
    }
    /**
     * Declares a `has-one` relation.
     */
    public function getClasses()
    {
        return $this->hasOne(Classes::className(),['id' => 'class_id'] );
    }
}
