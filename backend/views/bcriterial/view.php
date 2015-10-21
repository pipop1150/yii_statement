<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\TbCriterial */

$this->title = $model->ctr_id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Criterials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-criterial-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->ctr_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->ctr_id], [
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
            'ctr_id',
            'ctr_tnk_id',
            'ctr_priority',
            'ctr_criterial',
        ],
    ]) ?>

</div>
