<?php

namespace app\controllers;

use app\models\FurnitureTable;
use app\models\TypeFurniture;
use yii\db\Query;

class ListFurnitureController extends \yii\web\Controller
{
    private  $name_type;
    public function actionIndex($name_type)
    {
        $this->name_type = $name_type;
        $category = TypeFurniture::findOne($name_type);
        $furniture = $category->getFurnitureTables()->asArray()->all();

        return $this->render('index',[
            'furniture'=>$furniture,
            'category'=>$category
        ]);
    }

    public function actionInfoFurniture($id){
        return $this->render('infoFurniture',[
            'furnitureEl'=>FurnitureTable::findOne($id)
        ]);
    }

}
