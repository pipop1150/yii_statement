<?php
/**
 * Created by PhpStorm.
 * User: username
 * Date: 22/10/2558
 * Time: 9:56
 */

namespace backend\controllers;

use Yii;
use common\models\TbCriterial;
use yii\data\ActiveDataProvider;
use yii\web\Controller;


class HomeController extends Controller
{
    public function actionIndex(){
        $dataProvider = new ActiveDataProvider([
            'query' => TbCriterial::find(),
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider,
        ]);
    }

}