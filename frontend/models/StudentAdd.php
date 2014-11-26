<?php
namespace frontend\models;

use yii\base\Model;
use app\models\Student;

class StudentAdd extends Model
{
    public $name;
    public $class_id;

    public function rules()
    {
        return [
            ['name', 'filter', 'filter'=>'trim'],
            ['name', 'required'],
            ['name', 'string', 'max'=>255],

            ['class_id', 'required'],
        ];
    }
    public function saveAdd()
    {
        if($this->validate()){
            $student = new Student();
            $student->name = $this->name;
            $student->class_id = $this->class_id;
            $student->save();
        }
        return null;
    }
}