<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "classes".
 *
 * @property integer $id
 * @property integer $num
 * @property integer $school_id
 * @property string $letter

 */
class Classes extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'classes';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['school_id'], 'integer'],
            [['num'], 'integer'],
            [['letter'], 'string' , 'max' => 1]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'num_class' => 'Num_class',
            'school_id' => 'School ID',
            'letter' => 'Letter'
        ];
    }
}