<?php

/** @var yii\web\View $this */

$this->title = 'My Yii Application';
$counter = 0;
?>

<h3>Товары</h3>

<div class="list_tovar" style="display: flex">
    <?php foreach ($model as $value): $img = \app\models\FurnitureImg::find()->where(['id_furniture'=>$value['id']])->all();  ?>
    <?php if ($counter >= 3): $counter = 1; ?>
        </div>
        <div class="list_tovar" style="display: flex">
    <?php endif; ?>
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
            <div class="el_tovar">
                <h3 style="padding: 5px"><?= floatval($value['price']) - floatval($value['price'])*(intval($value['discount'])/100) ?> &#8381</h3>
                <?php if ($value['discount'] != 0): ?>
                    <s style="padding: 5px"><?= $value['price'] ?> &#8381</s>
                    <p style="color: grey; padding: 5px">-<?= $value['discount'] ?> %</p>
                    <img width="26" height="26" src="<?= \yii\helpers\Url::to('../img/Skidka.svg') ?>" alt="Skidka">
                <?php endif; ?>
            </div>
            <a href="<?= \yii\helpers\Url::to('list-furniture\info-furniture?id='.$value['id']) ?>" style="text-decoration: none"><button class="btn_info_tovar">Подробнее</button></a>
        </div>
    <?php $counter ++; endforeach; ?>
</div>