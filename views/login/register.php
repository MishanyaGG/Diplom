<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

$this->title = "Регистрация";

?>
<?php
if (isset($status)): ?>
    <?php
    if ($status == "login"): ?>
        <div class="p-3 mb-2 bg-danger text-white">Данный логин существует</div>
    <?php
    endif; ?>
<?php
endif; ?>
<div class="site-login" style="margin-left: 35%">


    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row">
        <div class="col-lg-5">

            <?php
            $form = ActiveForm::begin([
                'id' => 'Users'
            ]) ?>

            <?= $form->field($model, 'first_name') ?>

            <?= $form->field($model, 'last_name') ?>

            <?= $form->field($model, 'patronimyc') ?>

            <?= $form->field($model, 'phone') ?>

            <?= $form->field($model, 'adress') ?>

            <?= $form->field($model, 'login') ?>

            <?= $form->field($model, 'password')->passwordInput() ?>

            <div class="form-group">
                <div>
                    <?= Html::submitButton(
                        'Зарегистрироваться',
                        ['class' => 'btn btn-primary', 'name' => 'login-button']
                    ) ?>
                </div>
            </div>

            <?php
            ActiveForm::end(); ?>
        </div>
    </div>
</div>

