<?php

$this->title = 'Список товаров '.$category['name_type'];
?>

<h1 align="center"><?= $category['name_type'] ?></h1>

<div class="list_tovar" style="display: flex">
    <?php foreach ($furniture as $value): $img = \app\models\FurnitureImg::find()->where(['id_furniture'=>$value['id']])->all(); ?>
        <div class="coll">
            <?php
                foreach ($img as $row):

                try {
                    $photo = file_get_contents($row['img']);
                    $photo = base64_encode($photo);

                } catch (Exception $ex){
                    $photo = '';
                }
                ?>
                <img class="img_prodash" width="212" height="212"  src="data:image/jpg;base64, <?= $photo ?>" alt="Divan">
            <?php break; endforeach; ?>
            <h5><?= $value['name'] ?></h5>
            <p>Цена</p>
            <div class="el_tovar">
                <h3 style="padding: 5px"><?= floatval($value['price']) - floatval($value['price'])*(intval($value['discount'])/100) ?> &#8381</h3>
                <s style="padding: 5px"><?= $value['price'] ?> &#8381</s>
                <p style="color: grey; padding: 5px">-<?= $value['discount'] ?> %</p>
                <img width="26" height="26" src="<?= \yii\helpers\Url::to('../img/Skidka.svg') ?>" alt="Skidka">
            </div>
            <a href="<?= \yii\helpers\Url::to('info-furniture?id='.$value['id']) ?>" style="text-decoration: none"><button class="btn_info_tovar">Подробнее</button></a>
        </div>
    <?php endforeach; ?>
</div>
