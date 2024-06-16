<?php

namespace tests\unit\models;

use app\models\LoginForm;
use app\models\Users;

class TestsForSiteTest extends \Codeception\Test\Unit
{
    protected \UnitTester $tester;

    function testCreateUser(){
        $user = new Users();
        $user->last_name = "Test";
        $user->first_name = "Test";
        $user->patronimyc = "Test";
        $user->login = "Test";
        $user->save();

        $this->assertEquals(true,$this->count(Users::find()->where(['login'=>$user->login])->asArray()) == 1 ? true : false);
    }

    function testLoginUser(){
        $user = Users::findOne(7);
        $model = new LoginForm();
        $model->login = $user->login;
        $model->password = $user->password;

        $rez = $model->login();


        $this->assertEquals(true,$rez);
    }

}
