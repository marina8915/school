<?php
return [
    'dashboard' => [
        'type' => 2,
        'description' => 'Админ панель',
    ],
    'student' => [
        'type' => 1,
        'description' => 'Студент',
        'ruleName' => 'userRole',
        'children' => [
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
