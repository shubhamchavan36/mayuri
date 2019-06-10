<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;
use yii\helpers\Url;
/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
    <!-- MAIN CONETENT START -->
    <div class="col-md-6 col-md-push-3">
        <div class="card">
            <div class="card-head style-primary">
                <header>Change Password</header>
            </div>
            <div class="card-body floating-label">


              <?php $form = ActiveForm::begin(['id' => 'users' ]); ?>

                <?php echo $form->errorSummary($model); ?>
                <input type="hidden" id="url" value="<?= Url::to(['user/checkcurrentpass'])?>">
                  <div class="row">
                      <div class="col-md-12">
                          <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true,'id'=>'current_pass','value'=>''])->label('Current Password'); ?>
                          <div id="error" style="color:red;margin-top: -10px;margin-bottom: 10px;">Entered Password is Wrong.</div>
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12">
                          <?= $form->field($model, 'password_hash')->passwordInput(['maxlength' => true,'id'=>'new_password','value'=>''])->label('New Password') ?>
                      </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">

                        <div class="form-group">
                            <?= Html::submitButton('Update', ['class' => 'btn btn-primary pull-right','id'=>'btnsubmit']) ?>
                        </div>
                    </div>
                  </div>
              <?php ActiveForm::end(); ?>

            </div>
        </div>
    </div>
</div>
