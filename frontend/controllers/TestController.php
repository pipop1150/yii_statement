<?php

namespace frontend\controllers;

use Yii;
use frontend\common\AppCommon;
use common\models\TbCriterial;


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

    public function actionTest1(){

        $model = new TbCriterial();
        $model = TbCriterial::find()->one();
        if($model){
            echo $model->getAttribute('ctr_criterial');
            //var_dump($model);

        }



    }

    public function actionChoke(){
        $command = AppCommon::connection('db')->createCommand('SELECT * FROM tb_criterial WHERE ctr_id = 17');
        $post = $command->queryAll();
        foreach($post as $dd){
            echo $dd['ctr_criterial'];
        }
        //var_dump($post);

    }

    public function actionSearch(){

        Yii::$app->response->format = Response::FORMAT_JSON;

        if (Yii::app()->request->isAjaxRequest && isset($_POST['term'])) {
            $models = Model::model()->searchNames($_POST['term']);
            $result = array();
            foreach($models as $m){
                $result[] = array(
                    'name' => $m->name,
                    'id' => $m->id,
                );


            }
            echo CJSON::encode($result);
        }
    }

}
