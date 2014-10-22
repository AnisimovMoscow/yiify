<?php

use Yii;
use yii\widgets\Menu;
use yii\helpers\Url;

/* @var $this \yii\web\View */
?>
<?php if (!Yii::$app->user->isGuest): ?>
    <?= Menu::widget([
        'options' => ['class' => 'nav navbar-nav'],
        'encodeLabels' => false,
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-home"></span> Главная', 'url' => ['site/index']],
            ['label' => '<span class="glyphicon glyphicon-file"></span> Страницы', 'url' => ['page/index']],
        ],
    ]) ?>

    <a href="<?= Url::to(['site/logout'])?>" class="navbar-right navbar-link btn btn-default navbar-btn"><span class="glyphicon glyphicon-log-out"></span> Выйти</a>
    
    <?= Menu::widget([
        'options' => ['class' => 'nav navbar-nav navbar-right'],
        'encodeLabels' => false,
        'items' => [
            ['label' => '<span class="glyphicon glyphicon-user"></span> Пользователи', 'url' => ['user/index']],
        ],
    ]) ?>
<?php else: ?>
    <a href="<?= Url::to(['site/login'])?>" class="navbar-right navbar-link btn btn-default navbar-btn"><span class="glyphicon glyphicon-log-in"></span> Войти</a>
<?php endif; ?>
