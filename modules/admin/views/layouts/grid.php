<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>

<?php
$columns[] = [
    'class' => 'yii\grid\ActionColumn',
    'template' => '{update} {delete}',
    'buttons' => [
        'update' => function ($url, $model) {
            return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                'class' => 'btn btn-default btn-xs',
                'data-pjax' => '0'
            ]);
        },
        'delete' => function ($url, $model) {
            return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                'class' => 'btn btn-default btn-xs',
                'data-confirm' => Yii::t('yii', 'Are you sure you want to delete this item?'),
                'data-method' => 'post',
                'data-pjax' => '0',
            ]);
        }
    ]
];
?>

<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => $columns
]) ?>
