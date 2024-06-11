<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "reviews".
 *
 * @property int $id
 * @property int|null $users_id
 * @property int|null $furniture_id
 * @property int|null $grade
 * @property string|null $text
 * @property string|null $date_create
 *
 * @property FurnitureTable $furniture
 * @property Users $users
 */
class Reviews extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'reviews';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['users_id', 'furniture_id', 'grade'], 'default', 'value' => null],
            [['users_id', 'furniture_id', 'grade'], 'integer'],
            [['text'], 'string'],
            [['date_create'], 'safe'],
            [['furniture_id'], 'exist', 'skipOnError' => true, 'targetClass' => FurnitureTable::class, 'targetAttribute' => ['furniture_id' => 'id']],
            [['users_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::class, 'targetAttribute' => ['users_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'users_id' => 'Users ID',
            'furniture_id' => 'Furniture ID',
            'grade' => 'Grade',
            'text' => 'Text',
            'date_create' => 'Date Create',
        ];
    }

    /**
     * Gets query for [[Furniture]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getFurniture()
    {
        return $this->hasOne(FurnitureTable::class, ['id' => 'furniture_id']);
    }

    /**
     * Gets query for [[Users]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsers()
    {
        return $this->hasOne(Users::class, ['id' => 'users_id']);
    }
}
