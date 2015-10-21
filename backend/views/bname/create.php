<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbTaskname */

$this->title = 'Create Tb Taskname';
$this->params['breadcrumbs'][] = ['label' => 'Tb Tasknames', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-taskname-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
