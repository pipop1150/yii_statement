<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\MsTransactionPayment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ms-transaction-payment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'trs_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trs_create_date')->textInput() ?>

    <?= $form->field($model, 'trs_update_date')->textInput() ?>

    <?= $form->field($model, 'trs_group_id')->textInput() ?>

    <?= $form->field($model, 'trs_frequency_id')->textInput() ?>

    <?= $form->field($model, 'trs_frequency_name')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
