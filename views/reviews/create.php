<?php

use yii\helpers\Html;

/** @var yii\web\View $this */
/** @var app\models\Reviews $model */

$this->title = 'Create Reviews';
$this->params['breadcrumbs'][] = ['label' => 'Reviews', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="reviews-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
        'furniture_id'=>$furniture_id,
        'client_id'=>$client_id
    ]) ?>

</div>
