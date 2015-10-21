<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\TbTaskprocess */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="tb-taskprocess-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tkp_tkn_id')->textInput() ?>

    <?= $form->field($model, 'tkp_status_success')->textInput() ?>

    <?= $form->field($model, 'tkp_start_date')->textInput() ?>

    <?= $form->field($model, 'tkp_end_date')->textInput() ?>

    <?= $form->field($model, 'tkp_message')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
