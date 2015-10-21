<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbTaskprocess */

$this->title = 'Update Tb Taskprocess: ' . ' ' . $model->tkp_id;
$this->params['breadcrumbs'][] = ['label' => 'Tb Taskprocesses', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->tkp_id, 'url' => ['view', 'id' => $model->tkp_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-taskprocess-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
