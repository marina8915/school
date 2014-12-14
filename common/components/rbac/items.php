<?php
return [
    'dashboard' => [
        'type' => 2,
        'description' => 'Админ панель',
    ],
    'user' => [
        'type' => 1,
        'description' => 'Пользователь',
        'ruleName' => 'userRole',
    ],
    'student' => [
        'type' => 1,
        'description' => 'Студент',
        'ruleName' => 'userRole',
        'children' => [
            'user',
            'dashboard',
        ],
    ],
    'teacher' => [
        'type' => 1,
        'description' => 'Вчитель',
        'ruleName' => 'userRole',
        'children' => [
            'student',
        ],
    ],
    'admin' => [
        'type' => 1,
        'description' => 'Администратор',
        'ruleName' => 'userRole',
        'children' => [
            'teacher',
        ],
    ],
];
