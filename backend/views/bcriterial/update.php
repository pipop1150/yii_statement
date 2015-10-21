<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbCriterial */

$this->title = 'Update Tb Criterial: ' . ' ' . $model->ctr_id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Criterials', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->ctr_id, 'url' => ['view', 'id' => $model->ctr_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-criterial-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
