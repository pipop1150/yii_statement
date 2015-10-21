<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Criterials';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-criterial-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Criterial', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'ctr_id',
            'ctr_tnk_id',
            'ctr_priority',
            'ctr_criterial',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
