<?php

namespace app\controllers;


use app\models\LoginForm;
use app\models\Users;
use Yii;

class LoginController extends \yii\web\Controller
{
    /**
     * Страница входа в аккаунт
     * @return string|\yii\web\Response
     */
    public function actionIndex()
    {
        // Проверка на гостя
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        // Создаём экземпляр модели
        $model = new LoginForm();

        // Пробуем войти
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        // Выводим представление и добавляем переменную для вывода в представлении
        return $this->render('index', [
            'model' => $model
        ]);
    }

    public function actionRegister()
    {
        if (!Yii::$app->request->post()) {
            return $this->render('register', [
                'model' => new Users()
            ]);
        } else {
            if (count(Users::find()->where(['login' => Yii::$app->request->post()['Users']['login']])->asArray()->all(
                )) != 0) {
                return $this->render('register', [
                    'model' => new Users(),
                    'status' => 'login'
                ]);
            } else {
                $model = new Users();

                $post = Yii::$app->request->post()['Users'];

                $model->first_name = $post['first_name'];
                $model->last_name = $post['last_name'];
                $model->patronimyc = $post['patronimyc'];
                $model->phone = $post['phone'];
                $model->adress = $post['adress'];
                $model->login = $post['login'];
                $model->password = $post['password'];


                if ($model->save()) {
                    $model = new LoginForm();

                    $model->login = $post['login'];
                    $model->password = $post['password'];

                    if ($model->login()) {
                        return $this->goBack();
                    }
                }
            }
        }
    }

    /**
     * Выход из аккаунта
     * @return \yii\web\Response
     */
    public function actionLogout()
    {
        // Выход из аккаунта
        Yii::$app->user->logout();

        // Перенаправление на главную страницу (news/index)
        return $this->goHome();
    }
}
