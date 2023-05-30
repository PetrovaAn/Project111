<?php

/** @var \yii\web\View $this */
/** @var string $content */

use common\widgets\Alert;
use frontend\assets\AppAsset;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;
use yii\helpers\Url;

$news = [
    'index',
    'news-1',
    'news-2',
    'news-3',
];
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<?php if (!Yii::$app->user->isGuest): ?>
             <header >
                 <nav class="main-header-nav">
                     <ul class="site-navigation">
                         <li class="site-navigation-item">
                             <a <?= in_array(Yii::$app->controller->action->id, $news) ? 'class="active"' : '' ?> href="<?= Url::to(['site/index']) ?>">Новости</a>
                         </li>
                         <li class= "site-navigation-item">
                             <a <?= Yii::$app->controller->action->id == 'travel' ? 'class="active"' : '' ?> href="<?= Url::to(['site/travel']) ?>">Путешествия</a>
                         </li>
                         <li class="site-navigation-item">
                             <a <?= Yii::$app->controller->action->id == 'art' ? 'class="active"' : '' ?> href="<?= Url::to(['site/art']) ?>">Искусство</a>
                         </li>

                     </ul>
                 </nav>
    </header>
<?php endif;  ?>


<main role="main" class="flex-shrink-0">
    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</main>

<?php $this->endBody() ?>
</body>
<footer class="main-footer">
    <ul class="footer-navigation">
        <li class="footer-navigation-item">
            <a  href="<?= Url::to(['site/index']) ?>">Новости</a>
        </li>
        <li class= "footer-navigation-item">
            <a href="<?= Url::to(['site/travel']) ?>">Путешествия</a>
        </li>
        <li class="footer-navigation-item">
            <a href="<?= Url::to(['site/art']) ?>">Искусство</a>
        </li>

    </ul>

</footer>
</html>
<?php $this->endPage();
