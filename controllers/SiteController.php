<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Page;

class SiteController extends Controller
{
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    public function actionIndex()
    {
        $pages = Page::find()->all();
        
        return $this->render('index', ['pages' => $pages]);
    }
}
