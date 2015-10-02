<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\MsTransactionPayment */

$this->title = $model->trs_id;
$this->params['breadcrumbs'][] = ['label' => 'Ms Transaction Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ms-transaction-payment-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->trs_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->trs_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'trs_id',
            'trs_name',
            'trs_create_date',
            'trs_update_date',
            'trs_group_id',
            'trs_frequency_id',
            'trs_frequency_name',
        ],
    ]) ?>

</div>
