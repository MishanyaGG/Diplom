<?php

namespace app\controllers;

use app\models\FurnitureTable;
use app\models\Reviews;
use app\models\TypeFurniture;
use yii\db\Query;

class ListFurnitureController extends \yii\web\Controller
{
    private $statusOrder = false;
    public function actionIndex($name_type)
    {
        $category = TypeFurniture::findOne($name_type);
        $furniture = $category->getFurnitureTables()->asArray()->all();

        return $this->render('index',[
            'furniture'=>$furniture,
            'category'=>$category
        ]);
    }

    public function actionInfoFurniture($id, $status = false){
        return $this->render('infoFurniture',[
            'furnitureEl'=>FurnitureTable::findOne($id),
            'reviews'=>Reviews::find()->where(['furniture_id'=>$id])->asArray()->all(),
            'status'=>$status
        ]);
    }

    public function actionAddOrder(){

        if (\Yii::$app->request->isPost){
            $post = \Yii::$app->request->post();

            $url = 'http://localhost/diplomApi/hs/addOrder';


            $data = array(
                'client_id'  => $post['client_id'],
                'furniture_id' => $post['furniture_id']
            );


            $ch = curl_init($url);
            curl_setopt($ch, CURLOPT_USERPWD,  "Директор:1");
            curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data, JSON_UNESCAPED_UNICODE));
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            curl_setopt($ch, CURLOPT_HEADER, false);
            $res = curl_exec($ch);
            curl_close($ch);

            $res = json_encode($res, JSON_UNESCAPED_UNICODE);
            $this->statusOrder = true;

            return $this->redirect('info-furniture?id='.$post['furniture_id'].'&status='.$this->statusOrder);

        }
    }

}
