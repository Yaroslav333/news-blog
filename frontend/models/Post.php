<?php
/**
 * Created by PhpStorm.
 * User: Candy
 * Date: 08.12.2016
 * Time: 18:36
 */

namespace frontend\models;
use yii\db\ActiveRecord;


class Post extends ActiveRecord
{

    public static function tableName()
    {
        return 'post';
    }


}