<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true,'autofocus'=>'true']) ?>

    <?= $form->field($model, 'username')->textInput(['maxlength' => true]) ?>

    <?php if($model->isNewRecord){ ?>
        <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true])->label('Password') ?>
    <?php } ?>

    <div class="card-actionbar">
        <div class="card-actionbar-row">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn  btn-primary btn-loading-state']) ?>
        </div>
    </div>


    <?php ActiveForm::end(); ?>

</div>
