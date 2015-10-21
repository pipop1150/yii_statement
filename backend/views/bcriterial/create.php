<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\TbCriterial */

$this->title = 'Create Tb Criterial';
$this->params['breadcrumbs'][] = ['label' => 'Tb Criterials', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tb-criterial-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
