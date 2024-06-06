<?php

namespace app\controllers;

use app\models\ImgFurniture;
use yii\db\Query;
use yii\web\Request;

class ApiOneController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $request = \Yii::$app->request->post(); // name and id

        $source = file_get_contents($request['name']);
        $base64 = base64_encode($source);

//        $insert = ImgFurniture::findOne($request['id']);
        $insert = ImgFurniture::findOne(1);

        $insert['img'] = $base64;

        $insert->save();

        $select = ImgFurniture::find()->where(['id'=>1])->asArray()->all();


//        return $this->render('index');
    }

}
