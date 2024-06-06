<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "material".
 *
 * @property int $id
 * @property string|null $name_material
 *
 * @property FurnitureTable[] $furnitureTables
 * @property ImgFurniture[] $imgFurnitures
 */
class Material extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'material';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_material'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_material' => 'Name Material',
        ];
    }

    /**
     * Gets query for [[FurnitureTables]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFurnitureTables()
    {
        return $this->hasMany(FurnitureTable::class, ['material_id' => 'id']);
    }

    /**
     * Gets query for [[ImgFurnitures]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getImgFurnitures()
    {
        return $this->hasMany(ImgFurniture::class, ['id_furniture' => 'id']);
    }
}
