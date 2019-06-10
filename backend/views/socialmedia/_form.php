<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\SocialMedia */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="social-media-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true,'readonly'=>true]) ?>

    <?= $form->field($model, 'alt')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="card-actionbar">
        <div class="card-actionbar-row">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn  btn-primary btn-loading-state']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
