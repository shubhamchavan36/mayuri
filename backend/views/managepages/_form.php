<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;
/* @var $this yii\web\View */
/* @var $model backend\models\managepages */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="managepages-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true,'disabled'=>'true']) ?>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'basic',
    ]) ?>
      
    <?php if($model->isNewRecord){?>
      <?= $form->field($model, 'image')->fileInput(['accept' => 'image/*','required'=>'required'])->label('Images') ?>
    <?php }else{?>
        <div class="row">
          <div class="col-md-6">
            <?= $form->field($model, 'image')->fileInput(['accept' => 'image/*'])->label('Images') ?>
          </div>
          <div class="col-md-6">
            <img src="<?=Yii::getAlias('@web')?>/images/about/<?=$model->image?>" alt="" class="img-responsive" width="128">
          </div>
        </div>
    <?php }?>
    
    
    <div class="card-actionbar">
        <div class="card-actionbar-row">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' =>'btn  btn-primary btn-loading-state']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
