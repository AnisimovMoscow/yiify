<?php

return [
    'bundles' => [
        'admin' => [
            'class' => 'yii\web\AssetBundle',
            'css' => ['css/admin.css'],
            'js' => [],
            'depends' => ['yii\bootstrap\BootstrapAsset']
        ],        
        'main' => [
            'class' => 'yii\web\AssetBundle',
            'css' => ['css/normalize.css', 'css/main.css'],
            'js' => ['js/main.js']
        ],
        'index' => [
            'class' => 'yii\web\AssetBundle',
            'css' => ['css/index.css'],
            'js' => ['js/index.js'],
            'depends' => ['main']
        ],
    ]
];
