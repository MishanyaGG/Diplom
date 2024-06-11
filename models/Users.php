<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string|null $last_name
 * @property string|null $first_name
 * @property string|null $patronimyc
 * @property string|null $phone
 * @property string|null $adress
 * @property string|null $login
 * @property string|null $password
 *
 * @property Reviews[] $reviews
 */
class Users extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['last_name', 'first_name', 'patronimyc', 'phone'], 'string', 'max' => 45],
            [['adress'], 'string', 'max' => 100],
            [['login', 'password'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'last_name' => 'Last Name',
            'first_name' => 'First Name',
            'patronimyc' => 'Patronimyc',
            'phone' => 'Phone',
            'adress' => 'Adress',
            'login' => 'Login',
            'password' => 'Password',
        ];
    }

    /**
     * Gets query for [[Reviews]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getReviews()
    {
        return $this->hasMany(Reviews::class, ['users_id' => 'id']);
    }
}
