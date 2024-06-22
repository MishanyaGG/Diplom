<?php

/** @var yii\web\View $this */

/** @var string $content */

use app\assets\AppAsset;
use app\models\TypeFurniture;
use app\widgets\Alert;
use yii\bootstrap5\Breadcrumbs;
use yii\bootstrap5\Html;
use yii\bootstrap5\Nav;
use yii\bootstrap5\NavBar;

AppAsset::register($this);

$typeFurniture = TypeFurniture::find()->all();

?>
<?php
$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <title><?= Html::encode($this->title) ?></title>
    <?php
    $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php
$this->beginBody() ?>

<header id="header">
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <div class="col-md-3 mb-2 mb-md-0">
                <a href="/" class="d-inline-flex link-body-emphasis text-decoration-none">
                    <img width="80" height="80" src="<?= \yii\helpers\Url::to('../img/logo.svg') ?>" alt="logo">
                </a>
            </div>

            <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
<!--                --><?php
//                if ($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/site/catalog') : ?>
<!--                    <li><a href="" class="nav-link px-2"-->
<!--                           style="border-bottom: 1px solid black; height: 35px; color: black">Товары</a></li>-->
<!--                    <li><a href="--><?//= \yii\helpers\Url::to('../site/contacts') ?><!--" class="nav-link px-2"-->
<!--                           style="height: 35px; color: black">Контакты</a></li>-->
<!--                    <li><a href="#" class="nav-link px-2" style="height: 35px; color: black">Конструктор</a></li>-->
<!--                --><?php
//                endif; ?>

                <?php
                if ($_SERVER['REQUEST_URI'] == '/site/contacts'): ?>
                    <li><a href="/" class="nav-link px-2"
                           style="height: 35px; color: black">Товары</a></li>
                    <li><a href="<?= \yii\helpers\Url::to('../site/contacts') ?>" class="nav-link px-2"
                           style="border-bottom: 1px solid black; height: 35px; color: black">Контакты</a></li>
                    <?php if (!Yii::$app->user->isGuest): ?>
<!--                        <li><a href="#" class="nav-link px-2" style="height: 35px; color: black">Конструктор</a></li>-->
                    <?php endif; ?>
                <?php else: ?>
                    <li><a href="" class="nav-link px-2"
                           style="border-bottom: 1px solid black; height: 35px; color: black">Товары</a></li>
                    <li><a href="<?= \yii\helpers\Url::to('../site/contacts') ?>" class="nav-link px-2"
                           style="height: 35px; color: black">Контакты</a></li>
                    <?php if (!Yii::$app->user->isGuest): ?>
<!--                        <li><a href="#" class="nav-link px-2" style="height: 35px; color: black">Конструктор</a></li>-->
                    <?php endif; ?>
                <?php endif; ?>
            </ul>

            <div class="col-md-3 text-end">
                <?php if(Yii::$app->user->isGuest): ?>
                    <a href="<?= \yii\helpers\Url::to('/login/register') ?>"><button type="button" class="btn btn-secondary">Регистрация</button></a>
                    <a href="<?= \yii\helpers\Url::to('/login/index') ?>"><button type="button" class="btn btn-primary">Войти</button></a>
                <?php else: ?>
                    <a href="<?= \yii\helpers\Url::to('/login/logout') ?>"><button type="button" class="btn btn-primary">Выйти</button></a>
                <?php endif; ?>
            </div>
        </header>
        <div align="center">
            <?php foreach ($typeFurniture as $value): ?>
                <?= \yii\helpers\Html::a($value['name_type'], ['./list-furniture/index?name_type='.$value['id']], ['class' => 'list_catalog']) ?>
            <?php endforeach; ?>
        </div>
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
                        <?php $i = 0; foreach ($typeFurniture as $value): ?>
                            <?php if ($i != 3): ?>
                                <?= \yii\helpers\Html::a($value['name_type'], ['./list-furniture/index?name_type='.$value['id']], ['style'=>'text-decoration: none; color: black; font-size: 20px; padding: 5px']) ?>
                                <?php $i++; ?>
                            <?php else: ?>
                                </div>
                                <div class="coll">
                                    <?= \yii\helpers\Html::a($value['name_type'], ['./list-furniture/index?name_type='.$value['id']], ['style'=>'text-decoration: none; color: black; font-size: 20px; padding: 5px']) ?>
                                    <?php $i = 0; ?>
                            <?php endif; ?>

                        <?php endforeach; ?>
                                </div>
                </div>
            </div>
            <div class="right_footer">
                <a href="../site/contacts" style="text-decoration: none; color: black; font-size: 36px">Контакты</a>
            </div>
        </div>
        <div style="display: flex; background: #E9E9E9; width: 100%; padding: 20px;">
            <i style="margin-left: 20%">Нужна помощь?</i>
            <p style="margin-left: 10%"><b>Телефон:</b> 8(800) 555 30 05</p>
            <p style="margin-left: 10%"><b>E-mail:</b> <a href="mailto:mishatitovmail.ru@gmail.com">mishatitovmail.ru@gmail.com</a>
            </p>
        </div>
    </div>
</footer>

<?php
$this->endBody() ?>
</body>
</html>
<?php
$this->endPage() ?>
