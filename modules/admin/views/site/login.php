<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\widgets\ActiveForm */
/* @var $model app\modules\admin\models\LoginForm */

$this->title = 'Войти';
?>

<h1><?= $this->title ?></h1>

<?php $form = ActiveForm::begin(['options' => ['class' => 'login-form']]); ?>
    <?= $form->field($model, 'username') ?>
    <?= $form->field($model, 'password')->passwordInput() ?>
    <?= Html::submitButton('Войти', ['class' => 'btn btn-default']) ?>
<?php ActiveForm::end(); ?>
