<?php
/**
 * Created by PhpStorm.
 * User: Candy
 * Date: 09.12.2016
 * Time: 13:58
 */

namespace frontend\models;


use yii\base\Model;

class LoginForm extends Model
{


    public $username;
    public $password;


    public function rules()
    {
        return [
            [['username', 'password'], 'required'],

        ];

    }


    public function attributeLabels()
    {
        return [

            'username' => 'Логин',
            'password' => 'Пароль'
        ];
    }


}