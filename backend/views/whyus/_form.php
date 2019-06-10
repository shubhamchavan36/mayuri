<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\WhyUs */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="why-us-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>


     <div class="card-actionbar">
        <div class="card-actionbar-row">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn  btn-primary btn-loading-state']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
