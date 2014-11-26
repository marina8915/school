<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "student".
 *
 * @property integer $id
 * @property integer $classes_id
 * @property string $name

 */

class Student extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'students';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['classes_id'], 'integer'],
            [['name'], 'string' , 'max' => 255]
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
            'name' => 'Name'
        ];
    }
    /**
     * Declares a `has-one` relation.
     */
    public function getClasses()
    {
        return $this->hasOne(Classes::classname(),['id' => 'classes_id'] );
    }

}