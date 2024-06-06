<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "furniture_table".
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $type_furniture_id
 * @property float|null $long
 * @property float|null $width
 * @property float|null $height
 * @property int|null $material_id
 * @property int|null $color_id
 * @property float|null $price
 * @property float|null $discount
 *
 * @property Colors $color
 * @property Material $material
 * @property Reviews[] $reviews
 * @property TypeFurniture $typeFurniture
 */
class FurnitureTable extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'furniture_table';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['type_furniture_id', 'material_id', 'color_id'], 'default', 'value' => null],
            [['type_furniture_id', 'material_id', 'color_id'], 'integer'],
            [['long', 'width', 'height', 'price', 'discount'], 'number'],
            [['name'], 'string', 'max' => 45],
            [['color_id'], 'exist', 'skipOnError' => true, 'targetClass' => Colors::class, 'targetAttribute' => ['color_id' => 'id']],
            [['material_id'], 'exist', 'skipOnError' => true, 'targetClass' => Material::class, 'targetAttribute' => ['material_id' => 'id']],
            [['type_furniture_id'], 'exist', 'skipOnError' => true, 'targetClass' => TypeFurniture::class, 'targetAttribute' => ['type_furniture_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'type_furniture_id' => 'Type Furniture ID',
            'long' => 'Long',
            'width' => 'Width',
            'height' => 'Height',
            'material_id' => 'Material ID',
            'color_id' => 'Color ID',
            'price' => 'Price',
            'discount' => 'Discount',
        ];
    }

    /**
     * Gets query for [[Color]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getColor()
    {
        return $this->hasOne(Colors::class, ['id' => 'color_id']);
    }

    /**
     * Gets query for [[Material]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMaterial()
    {
        return $this->hasOne(Material::class, ['id' => 'material_id']);
    }

    /**
     * Gets query for [[Reviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Reviews::class, ['furniture_id' => 'id']);
    }

    /**
     * Gets query for [[TypeFurniture]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTypeFurniture()
    {
        return $this->hasOne(TypeFurniture::class, ['id' => 'type_furniture_id']);
    }
}
