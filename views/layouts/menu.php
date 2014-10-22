<?php

use yii\widgets\Menu;

/* @var $this \yii\web\View */
?>
<?= Menu::widget([
    'items' => [
        ['label' => 'Главная', 'url' => ['site/index']],
        ['label' => 'О компании', 'url' => ['about/index']],
        ['label' => 'Контакты', 'url' => ['contacts/index']],
    ],
]) ?>
