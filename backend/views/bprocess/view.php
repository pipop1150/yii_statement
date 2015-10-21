<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbTaskprocess */

$this->title = $model->tkp_id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Taskprocesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-taskprocess-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tkp_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tkp_id], [
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
            'tkp_id',
            'tkp_tkn_id',
            'tkp_status_success',
            'tkp_start_date',
            'tkp_end_date',
            'tkp_message',
        ],
    ]) ?>

</div>
