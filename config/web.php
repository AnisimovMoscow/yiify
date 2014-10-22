<?php

return [
    'id' => 'yiify',
    'language' => 'ru',
    'basePath' => dirname(__DIR__),
    'bootstrap' => ['log', 'gii'],
    'modules' => [
        'admin' => 'app\modules\admin\Module',
        'gii' => 'yii\gii\Module',
    ],
    'components' => [
        'user' => [
            'identityClass' => 'app\modules\admin\models\User',
            'loginUrl' => '/admin/site/login'
        ],
        'request' => [
            'cookieValidationKey' => 'Dg2LxInF1cSARtaIx8dNz'
        ],
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'page/<name:\w+>' => 'page/view'
            ]
        ],
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'errorHandler' => [
            'errorAction' => 'site/error',
        ],
        'log' => [
            'traceLevel' => YII_DEBUG ? 3 : 0,
            'targets' => [
                [
                    'class' => 'yii\log\FileTarget',
                    'levels' => ['error', 'warning'],
                ],
            ],
        ],
        'db' => require(__DIR__ . '/db.php'),
        'assetManager' => require(__DIR__ . '/assets.php'),
    ],
    'params' => require(__DIR__ . '/params.php'),
];
