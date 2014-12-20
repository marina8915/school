<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'authManager' => [
		    'class' => 'yii\rbac\PhpManager',
		    'defaultRoles' => ['user','student', 'teacher', 'admin'],
		    //зададим куда будут сохраняться наши файлы конфигураций RBAC
		    'itemFile' => '@common/components/rbac/items.php',
		    'assignmentFile' => '@common/components/rbac/assignments.php',
		    'ruleFile' => '@common/components/rbac/rules.php'
        ],
	'urlManager' => [ 
		'enablePrettyUrl' => true,
           	'showScriptName' => false,
		'rules'=>[
			'' => 'site/index',
			'login' => 'site/login',         
		],
        
	],
    ],
];
