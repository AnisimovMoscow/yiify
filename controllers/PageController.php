<?php

namespace app\controllers;

use yii\web\Controller;
use app\models\Page;
use yii\web\NotFoundHttpException;

class PageController extends Controller
{
    public function actionView($name)
    {
        $page = Page::findOne(['name' => $name]);
        if ($page === null) {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
        
        return $this->render('view', ['page' => $page]);
    }
}
