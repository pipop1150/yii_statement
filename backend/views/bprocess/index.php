<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Tb Taskprocesses';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-taskprocess-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Tb Taskprocess', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'tkp_id',
            'tkp_tkn_id',
            'tkp_status_success',
            'tkp_start_date',
            'tkp_end_date',
            // 'tkp_message',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>

</div>
