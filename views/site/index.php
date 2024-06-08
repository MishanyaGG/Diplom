<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>

<h3>Товары</h3>
<div class="list_tovar">
    <div class="coll">
        <img src="<?= \yii\helpers\Url::to('img/Krovati.svg') ?>" alt="Кровати" style="border-radius: 10px">
        <h5>Кровати</h5>
    </div>

    <div class="coll">
        <img src="<?= \yii\helpers\Url::to('img/Krovati.svg') ?>" alt="Кровати" style="border-radius: 10px">
        <h5>Кровати</h5>
    </div>

    <div class="coll">
        <img src="<?= \yii\helpers\Url::to('img/Krovati.svg') ?>" alt="Кровати" style="border-radius: 10px">
        <h5>Кровати</h5>
    </div>

    <div class="coll">
        <img src="<?= \yii\helpers\Url::to('img/Krovati.svg') ?>" alt="Кровати" style="border-radius: 10px">
        <h5>Кровати</h5>
    </div>

    <div class="coll">
        <img src="<?= \yii\helpers\Url::to('img/Krovati.svg') ?>" alt="Кровати" style="border-radius: 10px">
        <h5>Кровати</h5>
    </div>
</div>

<!--<h3 style="margin-top: 20px">Хиты продаж</h3>-->
<!--<div class="list_tovar" style="display: flex">-->
<!--    <div class="coll">-->
<!--        <img class="img_prodash" src="--><?//= \yii\helpers\Url::to('../img/Divan.svg') ?><!--" alt="Divan">-->
<!--        <h5>Композиция Soho беж. №16 для прихожей</h5>-->
<!--        <p>Цена</p>-->
<!--        <div class="el_tovar">-->
<!--            <h3 style="padding: 5px">94 930 &#8381</h3>-->
<!--            <s style="padding: 5px">133 700 &#8381</s>-->
<!--            <p style="color: grey; padding: 5px">-29 %</p>-->
<!--            <img width="26" height="26" src="--><?//= \yii\helpers\Url::to('../img/Skidka.svg') ?><!--" alt="Skidka">-->
<!--        </div>-->
<!--        <button class="btn_info_tovar">Подробнее</button>-->
<!--    </div>-->
<!---->
<!--    <div class="coll">-->
<!--        <img class="img_prodash" src="--><?//= \yii\helpers\Url::to('../img/Divan2.svg') ?><!--" alt="Divan2">-->
<!--        <h5>Кровати</h5>-->
<!--        <p>Цена</p>-->
<!--        <div class="el_tovar">-->
<!--            <h3 style="padding: 5px">94 930 &#8381</h3>-->
<!--            <s style="padding: 5px">133 700 &#8381</s>-->
<!--            <p style="color: grey; padding: 5px">-29 %</p>-->
<!--            <img width="26" height="26" src="--><?//= \yii\helpers\Url::to('../img/Skidka.svg') ?><!--" alt="Skidka">-->
<!--        </div>-->
<!--        <button class="btn_info_tovar">Подробнее</button>-->
<!--    </div>-->
<!---->
<!--    <div class="coll">-->
<!--        <img class="img_prodash" src="--><?//= \yii\helpers\Url::to('../img/Shkaw.svg') ?><!--" alt="Shkaw">-->
<!--        <h5>Кровати</h5>-->
<!--        <p>Цена</p>-->
<!--        <div class="el_tovar">-->
<!--            <h3 style="padding: 5px">94 930 &#8381</h3>-->
<!--            <s style="padding: 5px">133 700 &#8381</s>-->
<!--            <p style="color: grey; padding: 5px">-29 %</p>-->
<!--            <img width="26" height="26" src="--><?//= \yii\helpers\Url::to('../img/Skidka.svg') ?><!--" alt="Skidka">-->
<!--        </div>-->
<!--        <button class="btn_info_tovar">Подробнее</button>-->
<!--    </div>-->
<!---->
<!--    <div class="coll">-->
<!--        <img class="img_prodash" src="--><?//= \yii\helpers\Url::to('../img/Stenka.svg') ?><!--" alt="Stenka">-->
<!--        <h5>Кровати</h5>-->
<!--        <p>Цена</p>-->
<!--        <div class="el_tovar">-->
<!--            <h3 style="padding: 5px">94 930 &#8381</h3>-->
<!--            <s style="padding: 5px">133 700 &#8381</s>-->
<!--            <p style="color: grey; padding: 5px">-29 %</p>-->
<!--            <img width="26" height="26" src="--><?//= \yii\helpers\Url::to('../img/Skidka.svg') ?><!--" alt="Skidka">-->
<!--        </div>-->
<!--        <button class="btn_info_tovar">Подробнее</button>-->
<!--    </div>-->
<!--</div>-->

<div style="display: flex; margin-top: 30px">
    <div style="width: 60%">
        <img width="820" height="300" src="<?= \yii\helpers\Url::to('img/Konstructor.svg') ?>" alt="Konstructor">
    </div>
    <div style="background: #889D92; color: white;">
        <div style="margin-left: 10px; margin-top: 30px">
            <p>МЕБЕЛЬ НА ЗАКАЗ</p>
            <h2>НЕ НАШЛИ ТО, ЧТО ИСКАЛИ?</h2>
            <p>Закажите индивидуальный расчет шкафа или стола по вашим размерам</p>
            <a style="text-decoration: none; color: white;" href="#">Подробнее &gt</a>
        </div>
    </div>
</div>

<!--<h3 style="margin-top: 20px">Новинки</h3>-->
<!--<div class="list_tovar" style="display: flex">-->
<!--    <div class="coll">-->
<!--        <img class="img_prodash" src="--><?//= \yii\helpers\Url::to('../img/Divan.svg') ?><!--" alt="Divan">-->
<!--        <h5>Композиция Soho беж. №16 для прихожей</h5>-->
<!--        <p>Цена</p>-->
<!--        <div class="el_tovar">-->
<!--            <h3 style="padding: 5px">94 930 &#8381</h3>-->
<!--            <s style="padding: 5px">133 700 &#8381</s>-->
<!--            <p style="color: grey; padding: 5px">-29 %</p>-->
<!--            <img width="26" height="26" src="--><?//= \yii\helpers\Url::to('../img/Skidka.svg') ?><!--" alt="Skidka">-->
<!--        </div>-->
<!--        <button class="btn_info_tovar">Подробнее</button>-->
<!--    </div>-->
<!---->
<!--    <div class="coll">-->
<!--        <img class="img_prodash" src="--><?//= \yii\helpers\Url::to('../img/Divan2.svg') ?><!--" alt="Divan2">-->
<!--        <h5>Кровати</h5>-->
<!--        <p>Цена</p>-->
<!--        <div class="el_tovar">-->
<!--            <h3 style="padding: 5px">94 930 &#8381</h3>-->
<!--            <s style="padding: 5px">133 700 &#8381</s>-->
<!--            <p style="color: grey; padding: 5px">-29 %</p>-->
<!--            <img width="26" height="26" src="--><?//= \yii\helpers\Url::to('../img/Skidka.svg') ?><!--" alt="Skidka">-->
<!--        </div>-->
<!--        <button class="btn_info_tovar">Подробнее</button>-->
<!--    </div>-->
<!---->
<!--    <div class="coll">-->
<!--        <img class="img_prodash" src="--><?//= \yii\helpers\Url::to('../img/Shkaw.svg') ?><!--" alt="Shkaw">-->
<!--        <h5>Кровати</h5>-->
<!--        <p>Цена</p>-->
<!--        <div class="el_tovar">-->
<!--            <h3 style="padding: 5px">94 930 &#8381</h3>-->
<!--            <s style="padding: 5px">133 700 &#8381</s>-->
<!--            <p style="color: grey; padding: 5px">-29 %</p>-->
<!--            <img width="26" height="26" src="--><?//= \yii\helpers\Url::to('../img/Skidka.svg') ?><!--" alt="Skidka">-->
<!--        </div>-->
<!--        <button class="btn_info_tovar">Подробнее</button>-->
<!--    </div>-->
<!---->
<!--    <div class="coll">-->
<!--        <img class="img_prodash" src="--><?//= \yii\helpers\Url::to('../img/Stenka.svg') ?><!--" alt="Stenka">-->
<!--        <h5>Кровати</h5>-->
<!--        <p>Цена</p>-->
<!--        <div class="el_tovar">-->
<!--            <h3 style="padding: 5px">94 930 &#8381</h3>-->
<!--            <s style="padding: 5px">133 700 &#8381</s>-->
<!--            <p style="color: grey; padding: 5px">-29 %</p>-->
<!--            <img width="26" height="26" src="--><?//= \yii\helpers\Url::to('../img/Skidka.svg') ?><!--" alt="Skidka">-->
<!--        </div>-->
<!--        <button class="btn_info_tovar">Подробнее</button>-->
<!--    </div>-->
<!--</div>-->
