<?php

namespace app\controllers;

use app\models\FurnitureTable;
use app\models\TypeFurniture;
use yii\db\Query;

class ListFurnitureController extends \yii\web\Controller
{
    public function actionIndex($name_type)
    {
        $category = TypeFurniture::findOne($name_type);
        $furniture = $category->getFurnitureTables()->asArray()->all();

        return $this->render('index',[
            'furniture'=>$furniture,
            'category'=>$category
        ]);
    }

}
