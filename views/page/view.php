<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $page app\models\Page */

$this->registerAssetBundle('index');
$this->title = $page->title;
?>

<h1><?= Html::encode($page->title) ?></h1>

<p>
    <?= Html::encode($page->text) ?>
</p>

<p>
    <a href="<?= Url::home() ?>">Главная</a>
</p>
