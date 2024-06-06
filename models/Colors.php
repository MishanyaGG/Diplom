<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "colors".
 *
 * @property int $id
 * @property string|null $name_color
 *
 * @property FurnitureTable[] $furnitureTables
 */
class Colors extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'colors';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name_color'], 'string', 'max' => 45],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_color' => 'Name Color',
        ];
    }

    /**
     * Gets query for [[FurnitureTables]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFurnitureTables()
    {
        return $this->hasMany(FurnitureTable::class, ['color_id' => 'id']);
    }
}
