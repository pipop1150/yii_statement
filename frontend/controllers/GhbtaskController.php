<?php

namespace frontend\controllers;

use common\models\TbCriterial;
class GhbtaskController extends \yii\web\Controller
{
    public function actionIndex()
    {
        $cri = TbCriterial::getTaskByPID(1);
        /*return $this->render('index');
        return $this->render('index', [
            'cri' => $cri,
        ]);*/

        print_r(json_encode($cri));
    }

}
