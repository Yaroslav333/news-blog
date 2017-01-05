<?php

namespace app\modules\main\controllers;
use common\models\LoginForm;
use frontend\models\SignupForm;
use yii\widgets\ActiveForm;
use yii\web\Controller;
use yii\web\Response;

class MainController extends \yii\web\Controller
{


        public $layout = 'inner';
    public function actionIndex()
    {


        return $this->render('index');
    }




    public function actionLogin(){

        $model = new LoginForm();

       if ($model->load(\Yii::$app->request->post()) && $model->login()){

            $this->goBack();
       }

        return $this->render('login', ['model' => $model]);
    }


    public function actionLoguot(){

        \Yii::$app->user->logout();
        return $this->goHome();
    }

    public function actionRegister(){

        $model = new SignupForm();

        if(\Yii::$app->request->isAjax && \Yii::$app->request->isPost){
            if($model->load(\Yii::$app->request->post())) {
                \Yii::$app->response->format = Response::FORMAT_JSON;
                return ActiveForm::validate($model);
            }
        }

        if($model->load(\Yii::$app->request->post()) && $model->signup()){

            \Yii::$app->session->setFlash('success', 'Register Success');
        }

        return $this->render("register",['model' => $model]);
    }

}
