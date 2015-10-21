<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbTaskname */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-taskname-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tkn_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tkn_everyday')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tkn_everyweek')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tkn_everymonth')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tkn_onetime')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
