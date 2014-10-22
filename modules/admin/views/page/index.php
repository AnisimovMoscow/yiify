<?php

use yii\helpers\Html;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Страницы';
?>

<h1><?= Html::encode($this->title) ?></h1>

<p>
    <a href="<?= Url::to(['create']) ?>" class="btn btn-success">Создать страницу</a>
</p>

<?= $this->render('/layouts/grid', [
    'dataProvider' => $dataProvider,
    'columns' => [
        'id',
        'name',
        'title',
    ]
]) ?>
