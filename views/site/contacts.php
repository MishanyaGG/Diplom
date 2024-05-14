<?php

$this->title = 'Контакты';
?>

<h1 align="center">Контакты служб</h1>

<div class="contacts">
    <p style="padding: 15px">
        Единый справочный центр <br>
        &#128379 <a href="tel:8 (800) 555-30-05" style="text-decoration: none; color: black">8 (800) 555-30-05</a>
    </p>
</div>

<div class="manager">
    <div align="center" class="card_manager">
        <img style="border-radius: 10px;" width="150" height="150" src="<?= \yii\helpers\Url::to('../img/Shilov.jpg')?>" alt="Shilov">
        <p>Шилов Артём Евгеньевич</p>
        <a href="tel:8 (800) 555-30-05" style="text-decoration: none; color: black">8 (800) 555-30-05</a>
        <hr>
        <a href="mailto:hiartem@gmail.com" style="text-decoration: none; color: black">hiartem@gmail.com</a>
    </div>

    <div align="center" class="card_manager" style="margin-left: 10%">
        <img style="border-radius: 10px;" width="120" height="150" src="<?= \yii\helpers\Url::to('../img/Mishanya.jpg')?>" alt="Shilov">
        <p>Титов Михаил Александрович</p>
        <a href="tel:8 (800) 555-30-05" style="text-decoration: none; color: black;">8 (800) 555-30-05</a>
        <hr>
        <a href="mailto:himishanya@gmail.com" style="text-decoration: none; color: black">himishanya@gmail.com</a>
    </div>
</div>
