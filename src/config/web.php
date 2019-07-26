<?php

$config = [
    'id' => 'web',
    'controllerNamespace' => 'App\Controllers',
    'bootstrap' => [
        'log',
    ],
    'defaultRoute' => 'default/index',
    'components' => [
        'request' => [
            'class' => 'yii\web\Request',
            'cookieValidationKey' => 'please-replace',
        ],
        'user' => [
            'identityClass' => 'App\Models\User'
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
        ]
    ]
];

if (!YII_ENV_DEV) {
    // configuration adjustments for 'dev' environment
    $config['bootstrap'][] = 'debug';
    $config['modules']['debug'] = [
        'class' => 'yii\debug\Module',
    ];
    $config['bootstrap'][] = 'gii';
    $config['modules']['gii'] = [
        'class' => 'yii\gii\Module',
    ];
}

return $config;
