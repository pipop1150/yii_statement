<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\MsTransactionPayment */

$this->title = 'Update Ms Transaction Payment: ' . ' ' . $model->trs_id;
$this->params['breadcrumbs'][] = ['label' => 'Ms Transaction Payments', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->trs_id, 'url' => ['view', 'id' => $model->trs_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="ms-transaction-payment-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
