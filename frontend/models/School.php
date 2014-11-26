<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "school".
 *
 * @property integer $id
 * @property integer $num
 * @property integer $classes_id

 */
class Authors extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'school';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['class_id'], 'integer'],
            [['num'], 'integer' ]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'num' => 'Num',
            'class_id' => 'Class ID',
        ];
    }
    /**
     * This is the model class for table "school".
     * Declares a `has-many` relation.
     */
    public function getClasses()
    {
        return $this->hasMany(Classes::className(), ['school_id'=>'id']);
    }
}