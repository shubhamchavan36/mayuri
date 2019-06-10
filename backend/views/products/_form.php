<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
use backend\models\ProductImages;
use dosamigos\ckeditor\CKEditor;
use yii\widgets\Pjax;
//use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model backend\models\Products */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="products-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <div class="row">
  		<div class="col-lg-4 col-md-4 col-xs-12 col-sm-12">
  	    	<?= $form->field($modelimages, 'image[]')->fileInput(['accept' => 'image/*', 'multiple'=>true])->label('Images') ?>
  		</div>
  	</div>
    <input type='hidden' value='<?=Url::to(['products/delete-image'])?>' id='url'>
            <div class="row">

                    <?php if(!$model->isNewRecord)
                    {
                      Pjax::begin(['id'=>'remove-image']);
                      $model1=ProductImages::find()->where(['product_id'=>$model->id])->all();   
                        ?>
                        <?php foreach ($model1 as $key => $value) {
                            //print_r($value['image']);exit;
                                          echo "<div class='col-md-2 col-sm-6 col-xs-6'>";
                                          echo '<img src="'.Yii::getAlias('@web') . '/images/productimages/'.$value['image'].'" alt="No image" class="img-responsive">';
                                          echo '<input type="button" id="del_btn'. $value['id'].'" name="del_btn" class="btn btn-danger btn-xs btn-block" value="remove" onclick="onrmv('. $value['id'].');">';
                                          echo "</div>";  
                         }?>
                <?php 
                Pjax::end();
              } ?>

            </div>

    <?= $form->field($model, 'description')->widget(CKEditor::className(), [
        'options' => ['rows' => 6],
        'preset' => 'custom',
    ]) ?>

        <?= $form->field($model, 'size')->textInput(['maxlength' => true]) ?>

       <?= $form->field($model, 'price')->textInput(['maxlength' => true]) ?>

       <!-- <?= $form->field($model, 'weight')->textInput(['maxlength' => true]) ?>-->

      <!--  <?= $form->field($model, 'stock_availability')->textInput(['maxlength' => true]) ?>  -->
      <?= $form->field($model, 'stock_availability')->dropDownList(['Available' => 'Available', 'Not Available' => 'Not Available'],['prompt' => 'Select Availability']);?>

       <?= $form->field($model, 'colors')->textInput(['maxlength' => true]) ?> 
   
    <div class="card-actionbar">
        <div class="card-actionbar-row">
            <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => 'btn  btn-primary btn-loading-state']) ?>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
