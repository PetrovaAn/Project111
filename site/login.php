<?php

/** @var yii\web\View $this */
/** @var yii\bootstrap5\ActiveForm $form */

/** @var \common\models\LoginForm $model */

use yii\bootstrap5\Html;
use yii\bootstrap5\ActiveForm;

$this->title = 'Login';

?>
<div class="container">
    <div class="form_content">
        <h1 class="form__title">
            <bold>Авторизация</bold>
        </h1>
        <?php $form = ActiveForm::begin(['id' => 'login-form', 'class' => 'form__form-box form-box']); ?>
        <div class="form-box__input-box input-box">
            <label class="input-box__info" for="email">Email</label>
            <label class="input-box__icon" for="email"> </label>
            <?= $form->field($model, 'username', [
                'options' => ['placeholder' => 'Введите свою почту', 'class' => 'autorize-text-input'],
            ])->textInput(['maxlength' => true])->label(false) ?>
        </div>
        <div class="form-box__input-box input-box">
            <label class="input-box__info" for="password">Пароль</label>
            <label class="input-box__icon" for="password"> </label>
            <?= $form->field($model, 'password', [
                'options' => ['placeholder' => 'Введите свой пароль'],
            ])->textInput(['maxlength' => true])->label(false) ?>
        </div>
        <div class="form-box__btn-box btn-box">
            <?= Html::submitButton('Войти', ['class' => 'btn btn-primary', 'name' => 'login-button']) ?>

        </div>
        <?php ActiveForm::end(); ?>
    </div>
    <section class="promo">
        <div class="promo_content">
            <img src="image/Frame.jpg" class="promo__image"/>
        </div>
    </section>
