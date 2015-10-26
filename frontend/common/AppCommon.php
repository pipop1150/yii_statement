<?php

/**
 * Created by PhpStorm.
 * User: username
 * Date: 26/10/2558
 * Time: 9:51
 */

namespace frontend\common;
use Yii;

class AppCommon extends \yii\web\Controller
{
    public function init(){
        parent::init();

    }
    public function Hello(){
        return "Hello Yii2";
    }

    public function connection($db){
        return Yii::$app->$db;
    }
}