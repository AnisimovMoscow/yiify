<?php

use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */

$this->registerAssetBundle('index');
$this->title = 'Главная';
?>

<ul>
<?php foreach ($pages as $page): ?>
    <li>
        <a href="<?= Url::toRoute(['page/view', 'name' => $page->name])?>"><?= Html::encode($page->title) ?></a>
    </li>
<?php endforeach; ?>
</ul>
