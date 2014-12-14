<?php
namespace common\components\rbac;

use Yii;
use yii\rbac\Rule;
use yii\helpers\ArrayHelper;
use common\models\User;

class UserRoleRule extends Rule
{
    public $name = 'userRole';
    public function execute($user, $item, $params)
    {
        //Получаем массив пользователя из базы
        $user = ArrayHelper::getValue($params, 'user', User::findOne($user));
        if ($user) {
            $role = $user->role; //Значение из поля role базы данных
            if ($item->name === 'user') {
                return $role == User::ROLE_USER;
            } elseif ($item->name === 'student') {
                return $role == User::ROLE_USER || $role == User::ROLE_STUDENT;
            } elseif ($item->name === 'teacher') {
                return $role == User::ROLE_USER || $role == User::ROLE_STUDENT || $role == User::ROLE_TEACHER;
            } 
            elseif ($item->name === 'admin') {
                return $role == User::ROLE_ADMIN || User::ROLE_USER || $role == User::ROLE_STUDENT || $role == User::ROLE_TEACHER;
            }
        }
        return false;
    }
}
