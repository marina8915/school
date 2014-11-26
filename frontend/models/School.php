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
        return 'schools';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['classes_id'], 'integer'],
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
            'classes_id' => 'Classes ID',
        ];
    }
    /**
     * This is the model class for table "school".
     * Declares a `has-many` relation.
     */
    public function getClasses()
    {
        return $this->hasMany(Classes::className(), ['schools_id'=>'id']);
    }
}