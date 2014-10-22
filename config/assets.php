<?php

return [
    'bundles' => [
        'main' => [
            'class' => 'yii\web\AssetBundle',
            'sourcePath' => '@app/static',
            'css' => ['css/main.css'],
            'js' => ['js/main.js']
        ],
        'admin' => [
            'class' => 'yii\web\AssetBundle',
            'sourcePath' => '@app/static',
            'css' => ['css/admin.css'],
            'js' => [],
            'depends' => ['yii\bootstrap\BootstrapAsset']
        ],
        'index' => [
            'class' => 'yii\web\AssetBundle',
            'sourcePath' => '@app/static',
            'css' => ['css/index.css'],
            'js' => ['js/index.js'],
            'depends' => ['main']
        ],
    ]
];
