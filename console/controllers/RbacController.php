<?php
namespace console\controllers;

use Yii;
use yii\console\Controller;
use common\components\rbac\UserRoleRule;
use common\models\User;

class RbacController extends Controller
{
    public function actionInit()
    {
        $auth = Yii::$app->authManager;
        $auth->removeAll(); //удаляем старые данные
        //Создадим для примера права для доступа к админке
        $dashboard = $auth->createPermission('dashboard');
        $dashboard->description = 'Админ панель';
        $auth->add($dashboard);
        //Включаем наш обработчик
        $rule = new UserRoleRule();
        $auth->add($rule);
        //Добавляем роли
        $user = $auth->createRole('user');
        $user->description = 'Пользователь';
        $user->ruleName = $rule->name;
        $auth->add($user);

        $student = $auth->createRole('student');
        $student->description = 'Студент';
        $student->ruleName = $rule->name;
        $auth->add($student);

        $teacher = $auth->createRole('teacher');
        $teacher->description = 'Вчитель';
        $teacher->ruleName = $rule->name;
        $auth->add($teacher);

        $admin = $auth->createRole('admin');
        $admin->description = 'Администратор';
        $admin->ruleName = $rule->name;
        $auth->add($admin);

        //Добавляем потомков
        $auth->addChild($student, $user);
        $auth->addChild($student, $dashboard);
        $auth->addChild($teacher, $student);
        $auth->addChild($admin, $teacher);

        $auth->assign($user, User::ROLE_USER);
        $auth->assign($student, User::ROLE_STUDENT);
        $auth->assign($teacher, User::ROLE_TEACHER);
        $auth->assign($admin, User::ROLE_ADMIN);
    }
}
