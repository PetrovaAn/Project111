<?php

/** @var yii\web\View $this */
/** @var Comment $model */
/** @var $comments array */

use frontend\models\Comment;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;

$this->title = 'Новости';
?>
<main>
    <section class="prewie">
        <h1> Неловкость на коронации: лицо принца Гарри закрыла шляпа сестры Карла III </h1>
        <p class="description-main">Принц Гарри появился на коронации Карла III. Опальный герцог сидел на отдалении от короля и его супруги.
        </p>
    </section>
    <div>
        <img src="image/princ.jpg" class="princ" width="800" height="623" alt="Принц Гарри">
        <p class="description">
            Муж Меган Маркл прибыл в Лондон в одиночестве. Его избранница осталась вместе с детьми в Америке: сегодня день рождения и у маленького Арчи. Первенцу принца Гарри исполнилось четыре года.
        </p>
        <p class="description">
            Второму сыну короля Карла III не позволили надеть ни мантию, ни военную форму: принц, в отличие от остальных членов британской королевской семьи, предстал в гражданской одежде. 38-летнему Гарри разрешили сесть в третьем ряду, рядом с принцессой Александрой Кентской, двоюродной сестры Елизаветы II, и мужем принцессы Евгении Джеком Бруксбэнком.
        </p>
        <p class="description">
            «Мятежный» герцог сидел позади своего брата, который появился на церемонии вместе с женой и тремя детьми. Маленькие Кембриджи привлекали к себе особенное внимание на коронации.
        </p>
        <p class="description">
            Ранее предполагалось, что Гарри посадят на десятый ряд. Не обошлось и без неловкости. Лицо принцу практически полностью закрывала шляпа сестры Карла III.
        </p>
        <p class="description">
            Эксперт заметила, что Джек спросил своего собеседника о том, когда что-то произойдет. «Я думаю, завтра», — ответил ему Гарри. Теперь в Сети гадают, о чем мог быть этот диалог. «Меган выкинет какой-нибудь фокус?», «Неужели завтра прилетит и Меган?», «Может, он просто говорил, когда отправится домой?» — обсуждали блогеры.
        </p>
    </div>
    <div class="references">
        <a href="<?= Url::to(['site/news-1']) ?>" class="exit"> Назад </a>
        <a href="<?= Url::to(['site/news-3']) ?>" class="continue"> Далее </a>


    </div>

    <?php foreach ($comments as $comment): ?>

        <?= $comment->username ?>
        <?= $comment->text ?>

    <?php endforeach; ?>

    <hr>
    <?php $form = ActiveForm::begin(); ?>

    <p class=" comment-name">
        <?= $form->field($model, 'username')->textInput() ?>
    </p>

    <p class="comment_text">
        <?= $form->field($model, 'text')->textarea(['rows' => 50, 'cols' => 30]) ?>
    </p>


    <div class="form-group">
        <?= Html::submitButton('Отправить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</main>