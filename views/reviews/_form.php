<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Reviews $model */
/** @var yii\widgets\ActiveForm $form */
?>

<div class="reviews-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'users_id')->textInput(['type'=>'hidden','value'=>$client_id])->label(false) ?>

    <?= $form->field($model, 'furniture_id')->textInput(['type'=>'hidden','value'=>$furniture_id])->label(false) ?>

    <?= $form->field($model, 'grade')->textInput(['type'=>'number', 'max'=>5,'min'=>0,'required'])->label('Оценка (0-5)') ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6])->label('Описание товара') ?>

    <?= $form->field($model, 'date_create')->textInput(['type'=>'hidden','value'=>date('d-m-y')])->label(false) ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
