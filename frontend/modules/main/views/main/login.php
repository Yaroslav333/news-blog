<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\web\Response;

/* @var $this yii\web\View */
/* @var $model frontend\models\LoginForm */
/* @var $form ActiveForm */
?>
<div class="app-modules-main-views">

    <?php $form = ActiveForm::begin(['enableAjaxValidation' => true]);



    ?>

        <?= $form->field($model, 'username') ?>
        <?= $form->field($model, 'password')->passwordInput() ?>
    
        <div class="form-group">
            <?= Html::submitButton('Войти', ['class' => 'btn btn-primary']) ?>
        </div>
    <?php ActiveForm::end(); ?>

</div><!-- app-modules-main-views -->
