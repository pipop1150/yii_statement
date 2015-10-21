<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbTaskname */

$this->title = $model->tkn_id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Tasknames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-taskname-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->tkn_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->tkn_id], [
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
            'tkn_id',
            'tkn_name',
            'tkn_everyday',
            'tkn_everyweek',
            'tkn_everymonth',
            'tkn_onetime:datetime',
        ],
    ]) ?>

</div>
