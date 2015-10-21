<?php

namespace frontend\controllers;

use Yii;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        /*$connection = new \yii\db\Connection([
            'dsn' => 'oci:dbname=//127.0.0.1:1521/orcl;charset=UTF8',
            'username' => 'SYSTEM',
            'password' => '1234',
        ]);*/
        echo "wget.exe -q -O NUL http://domain.name/webapp/tools/cron.php";

        $command = Yii::$app->db->createCommand("select * from XHME");
        $posts = $command->queryColumn();

        var_dump($posts);


        //return 'ddddddddddddd';
    }

}
