<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "furniture_img".
 *
 * @property int $id
 * @property int|null $id_furniture
 * @property string|null $img
 *
 * @property FurnitureTable $furniture
 */
class FurnitureImg extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'furniture_img';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_furniture'], 'default', 'value' => null],
            [['id_furniture'], 'integer'],
            [['img'], 'string'],
            [['id_furniture'], 'exist', 'skipOnError' => true, 'targetClass' => FurnitureTable::class, 'targetAttribute' => ['id_furniture' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_furniture' => 'Id Furniture',
            'img' => 'Img',
        ];
    }

    /**
     * Gets query for [[Furniture]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFurniture()
    {
        return $this->hasOne(FurnitureTable::class, ['id' => 'id_furniture']);
    }
}
