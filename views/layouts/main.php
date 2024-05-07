<?php

/** @var yii\web\View $this */
/** @var string $content */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<header id="header">
    <div class="container">
    <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
      <div class="col-md-3 mb-2 mb-md-0">
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img width="80" height="80" src="<?= \yii\helpers\Url::to('img/logo.svg') ?>" alt="logo">
        </a>
      </div>

      <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
        <li><a href="#" class="nav-link px-2" style="border-bottom: 1px solid black; height: 35px; color: black">Товары</a></li>
        <li><a href="#" class="nav-link px-2" style="height: 35px; color: black">Контакты</a></li>
        <li><a href="#" class="nav-link px-2" style="height: 35px; color: black">Конструктор</a></li>
      </ul>

      <div class="col-md-3 text-end">
        <button type="button" class="btn btn-outline-primary me-2">Login</button>
        <button type="button" class="btn btn-primary">Sign-up</button>
      </div>
    </header>
  </div>
</header>

<main id="main" class="flex-shrink-0" role="main">
    <div class="container">
        <?= $content ?>
    </div>
</main>

<footer id="footer" class="mt-auto py-3 bg-light">
    <div class="container">
        <div style="display: flex">
            <div class="left_footer">
                <h3>Каталог</h3>
                <div class="list_coll" style="display: flex">
                    <div class="coll">
                        <p>Спальня</p>
                        <p>Гостиная</p>
                        <p>Прихожая</p>
                    </div>

                    <div class="coll">
                        <p>Молодежная</p>
                        <p>Кабинет</p>
                        <p>Кухня</p>
                    </div>
                </div>
            </div>
            <div class="right_footer">
                <h3>Контакты</h3>
                <div class="list_coll" style="display: flex">
                    <div class="coll">
                        <p>Спальня</p>
                        <p>Гостиная</p>
                        <p>Прихожая</p>
                    </div>
                </div>
            </div>
        </div>
        <div style="display: flex; background: #E9E9E9; width: 100%; padding: 20px;">
            <i style="margin-left: 20%">Нужна помощь?</i>
            <p style="margin-left: 10%"><b>Телефон:</b> 8(800) 555 03 11</p>
            <p style="margin-left: 10%"><b>E-mail:</b> <a href="mailto:mishatitovmail.ru@gmail.com">mishatitovmail.ru@gmail.com</a></p>
        </div>
        <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
            <img width="80" height="80" src="<?= \yii\helpers\Url::to('img/logo.svg') ?>" alt="logo">
        </a>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
