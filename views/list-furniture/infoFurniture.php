<?php

$this->title = ' ' . $furnitureEl['name'];
?>

<?php if ($status): ?>
    <div class="p-3 mb-2 bg-success text-white">Оплата прошла успешно, ожидайте звонка от менеджера</div>
<?php endif; ?>

<h1><?= $furnitureEl['name'] ?></h1>

<div class="furnitureEl">
    <?php
    $img = \app\models\FurnitureImg::find()->where(['id_furniture' => $furnitureEl['id']])->all();
    $material = \app\models\Material::findOne($furnitureEl['material_id']);
    $color = \app\models\Colors::findOne($furnitureEl['color_id']);

    foreach ($img as $row) {
        try {
            $photo = file_get_contents($row['img']);
            $photo = base64_encode($photo);
            ?>
            <div class="imgFurniture">
                <img style="border-radius: 10%" src="data:image/jpg;base64, <?= $photo ?>" width="433" height="433">
            </div>
            <?php
        } catch (Exception $ex) {
            $photo = '';
        }
    }

    ?>
    <div class="infoFurniture">
        <p style="position: relative; top: 5%; left: 5%">Код товара <?= $furnitureEl['id'] ?></p>
        <div class="elInfo">
            <h3 style="padding: 5px"><?= floatval($furnitureEl['price']) - floatval($furnitureEl['price'])*(intval($furnitureEl['discount'])/100) ?> &#8381</h3>
            <s style="padding: 5px"><?= $furnitureEl['price'] ?> &#8381</s>
            <p style="color: grey; padding: 5px">-<?= $furnitureEl['discount'] ?> %</p>
            <img width="26" height="26" src="<?= \yii\helpers\Url::to('../img/Skidka.svg') ?>" alt="Skidka">
        </div>
        <?php if (!Yii::$app->user->isGuest): ?>
            <?= $form = \yii\helpers\Html::beginForm('add-order','post') ?>
                <input type="hidden" value="<?= $furnitureEl['id'] ?>" name="furniture_id">
                <input type="hidden" value="<?= Yii::$app->user->id ?>" name="client_id">
                <button type="submit" class="btn_info_tovar">Купить</button>
            <?= \yii\helpers\Html::endForm() ?>
            <?php else: ?>
                <a href="<?= \yii\helpers\Url::to('../login') ?>" style="text-decoration: none"><button type="submit" class="btn_info_tovar">Войдите в учетную запись</button></a>
        <?php endif; ?>
    </div>
</div>

<h3>Характеристика</h3>
    <table class="table">
        <tr>
            <td><b>Характеристика</b></td>
            <td><b>Значение</b></td>
        </tr>
        <tr>
            <td><b>Ширина</b></td>
            <td><?= $furnitureEl['width'] ?> см</td>
        </tr>
        <tr>
            <td><b>Высота</b></td>
            <td><?= $furnitureEl['height'] ?> см</td>
        </tr>
        <tr>
            <td><b>Длинна</b></td>
            <td><?= $furnitureEl['long'] ?> см</td>
        </tr>
        <tr>
            <td><b>Материал</b></td>
            <td><?= $material['name_material'] ?></td>
        </tr>
        <tr>
            <td><b>Цвет</b></td>
            <td><?= $color['name_color'] ?></td>
        </tr>
    </table>