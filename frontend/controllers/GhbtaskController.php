<?php

namespace frontend\controllers;

use common\models\TbCriterial;
use frontend\common\AppCommon;
use Yii;
use yii\web\Response;

class GhbtaskController extends \yii\web\Controller
{
    public function actionIndex()
    {

        $cri = TbCriterial::getTaskByPID(1);
        return $this->render('index');
        return $this->render('index', [
            'cri' => $cri,
        ]);
    }

    public function actionTest(){
        $cri = TbCriterial::getTaskByPID(1);
        echo AppCommon::renderJSON($cri);
    }



}
