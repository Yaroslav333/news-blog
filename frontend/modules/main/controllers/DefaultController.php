<?php

namespace app\modules\main\controllers;

use yii\web\Controller;
use frontend\models\Post;

/**
 * Default controller for the `main` module
 */


class DefaultController extends Controller
{
    public $layout = 'bootstrap';
    public function actionIndex()
    {


        $this->layout = 'bootstrap';
        return $this->render('index');
    }
}
