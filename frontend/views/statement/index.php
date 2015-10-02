<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Ms Transaction Payments';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ms-transaction-payment-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Ms Transaction Payment', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'trs_id',
            'trs_name',
            'trs_create_date',
            'trs_update_date',
            'trs_group_id',
            // 'trs_frequency_id',
            // 'trs_frequency_name',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
