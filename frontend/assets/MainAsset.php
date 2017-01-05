<?php
/**
 * Created by PhpStorm.
 * User: Candy
 * Date: 03.12.2016
 * Time: 12:39
 */

namespace frontend\assets;


use yii\web\AssetBundle;

class MainAsset extends AssetBundle
{

    public $basePath = '@webroot';
    public $baseUrl = '@web';



    public $css = [
        'source/css/footer.css',
        'source/css/articlebox.css'
        ];




    public $js = [
        'source/js/facebook.js',

    ];



    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
        'yii\bootstrap\BootstrapPluginAsset',

    ];

}