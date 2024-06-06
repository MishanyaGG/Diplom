<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "type_furniture".
 *
 * @property int $id
 * @property string|null $name_type
 *
 * @property FurnitureTable[] $furnitureTables
 */
class TypeFurniture extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'type_furniture';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_type'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_type' => 'Name Type',
        ];
    }

    /**
     * Gets query for [[FurnitureTables]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFurnitureTables()
    {
        return $this->hasMany(FurnitureTable::class, ['type_furniture_id' => 'id']);
    }
}
